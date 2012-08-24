<?php

namespace Kobosta\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cookisto\SiteBundle\Entity\Dish
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Tshirt
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="lastupdate", type="datetime")
     */
    private $lastupdate;

    /**
     * @var string $title
     *
     * @ORM\Column(name="month", type="integer")
     */
    private $month;

    /**
     * @var string $title
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

     /**
     * @ORM\ManyToMany(targetEntity="Size")
     * @ORM\JoinTable(name="tshirt_sizes",
     *      joinColumns={@ORM\JoinColumn(name="tshirt_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="size_id", referencedColumnName="id")}
     *      )
     */
    private $sizes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $logoPath;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $logo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $fabricPath;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $fabric;

    public function __construct() {
        $this->lastupdate = new \DateTime();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLastupdate() {
        return $this->lastupdate;
    }

    public function setLastupdate($lastupdate) {
        $this->lastupdate = $lastupdate;
    }

    public function getMonth() {
        return $this->month;
    }

    public function setMonth($month) {
        $this->month = $month;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getSizes() {
        return $this->sizes;
    }

    public function setSizes($sizes) {
        $this->sizes = $sizes;
    }

    public function getLogoAbsolutePath()
    {
        return null === $this->logoPath ? null : $this->getUploadRootDir().'/'.$this->logoPath;
    }

    public function getLogoWebPath()
    {
        return null === $this->logoPath ? null : $this->getUploadDir().'/'.$this->logoPath;
    }

    public function getFabricAbsolutePath()
    {
        return null === $this->fabricPath ? null : $this->getUploadRootDir().'/'.$this->fabricPath;
    }

    public function getFabricWebPath()
    {
        return null === $this->fabricPath ? null : $this->getUploadDir().'/'.$this->fabricPath;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'upload/tshirts';
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->logo) {
            $this->removeLogoUpload();
            // do whatever you want to generate a unique name
            $this->logoPath = uniqid().'_l.'.$this->logo->guessExtension();
        }
        if (null !== $this->fabric) {
            $this->removeFabricUpload();
            // do whatever you want to generate a unique name
            $this->fabricPath = uniqid().'_f.'.$this->fabric->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null !== $this->logo) {
            // if there is an error when moving the file, an exception will
            // be automatically thrown by move(). This will properly prevent
            // the entity from being persisted to the database on error
            $this->logo->move($this->getUploadRootDir(), $this->logoPath);
            unset($this->logo);
        }

        if (null !== $this->fabric) {
            // if there is an error when moving the file, an exception will
            // be automatically thrown by move(). This will properly prevent
            // the entity from being persisted to the database on error
            $this->fabric->move($this->getUploadRootDir(), $this->fabricPath);
            unset($this->fabric);
        }
    }
    
    public function removeLogoUpload() {
        $file = $this->getLogoAbsolutePath();
        if (file_exists($file)) {
            unlink($file);
        }
    }

    public function removeFabricUpload() {
        $file = $this->getFabricAbsolutePath();
        if (file_exists($file)) {
            unlink($file);
        }
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $this->removeLogoUpload();
        $this->removeFabricUpload();
    }
}

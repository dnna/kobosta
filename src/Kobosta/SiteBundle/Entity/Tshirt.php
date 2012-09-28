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
    const S_SMALL = 's';
    const S_MEDIUM = 'm';
    const S_LARGE = 'l';
    const S_EXTRALARGE = 'xl';
    const S_EXTRAEXTRALARGE = 'xxl';

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
     *
     * @ORM\Column(name="monthtext", type="string", length=50)
     */
    private $monthtext;

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
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     *
     * @ORM\Column(name="sstock", type="integer")
     */
    private $sstock;

    /**
     *
     * @ORM\Column(name="mstock", type="integer")
     */
    private $mstock;

    /**
     *
     * @ORM\Column(name="lstock", type="integer")
     */
    private $lstock;

    /**
     *
     * @ORM\Column(name="xlstock", type="integer")
     */
    private $xlstock;

    /**
     *
     * @ORM\Column(name="xxlstock", type="integer")
     */
    private $xxlstock;

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

    /**
     * @ORM\OneToMany(targetEntity="TshirtOrder", mappedBy="tshirt")
     */
    private $orders;

    public function __construct() {
        $this->lastupdate = new \DateTime();
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function getMonthtext() {
        return $this->monthtext;
    }

    public function setMonthtext($monthtext) {
        $this->monthtext = $monthtext;
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

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getSstock() {
        return $this->sstock;
    }

    public function setSstock($sstock) {
        $this->sstock = $sstock;
    }

    public function getMstock() {
        return $this->mstock;
    }

    public function setMstock($mstock) {
        $this->mstock = $mstock;
    }

    public function getLstock() {
        return $this->lstock;
    }

    public function setLstock($lstock) {
        $this->lstock = $lstock;
    }

    public function getXlstock() {
        return $this->xlstock;
    }

    public function setXlstock($xlstock) {
        $this->xlstock = $xlstock;
    }

    public function getXxlstock() {
        return $this->xxlstock;
    }

    public function setXxlstock($xxlstock) {
        $this->xxlstock = $xxlstock;
    }

    public function getStock() {
        return ($this->sstock + $this->mstock + $this->lstock + $this->xlstock + $this->xxlstock);
    }

    public function getOrders() {
        return $this->orders;
    }

    public function setOrders($orders) {
        $this->orders = $orders;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function setLogo($logo) {
        $this->setLastupdate(new \DateTime());
        $this->logo = $logo;
    }

    public function getFabric() {
        return $this->fabric;
    }

    public function setFabric($fabric) {
        $this->setLastupdate(new \DateTime());
        $this->fabric = $fabric;
    }

    public function getRemaining() {
        return ($this->getRemainingS() + $this->getRemainingM() + $this->getRemainingL() + $this->getRemainingXL() + $this->getRemainingXXL());
    }

    public function getRemainingS() {
        $taken = 0;
        foreach($this->orders as $curOrder) {
            $taken = $taken + $curOrder->getScount();
        }
        return $this->getSstock() - $taken;
    }

    public function getRemainingM() {
        $taken = 0;
        foreach($this->orders as $curOrder) {
            $taken = $taken + $curOrder->getMcount();
        }
        return $this->getMstock() - $taken;
    }

    public function getRemainingL() {
        $taken = 0;
        foreach($this->orders as $curOrder) {
            $taken = $taken + $curOrder->getLcount();
        }
        return $this->getLstock() - $taken;
    }

    public function getRemainingXL() {
        $taken = 0;
        foreach($this->orders as $curOrder) {
            $taken = $taken + $curOrder->getXlcount();
        }
        return $this->getXlstock() - $taken;
    }

    public function getRemainingXXL() {
        $taken = 0;
        foreach($this->orders as $curOrder) {
            $taken = $taken + $curOrder->getXxlcount();
        }
        return $this->getXxlstock() - $taken;
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

    public static function getSizes() {
        return array(
            self::S_SMALL,
            self::S_MEDIUM,
            self::S_LARGE,
            self::S_EXTRALARGE,
            self::S_EXTRAEXTRALARGE
        );
    }

    public function __toString() {
        return $this->getTitle();
    }
}

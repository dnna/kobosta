<?php

namespace Kobosta\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kobosta\SiteBundle\Entity\Text
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Text
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="string", length=50)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="text")
     */
    private $text;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function __toString() {
        return $this->getText();
    }
}
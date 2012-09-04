<?php

namespace Kobosta\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kobosta\SiteBundle\Entity\Order
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TshirtOrder
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Tshirt", inversedBy="orders", cascade={"persist,detach"})
     * @ORM\JoinColumn(name="tshirt_id", referencedColumnName="id")
     */
    private $tshirt;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Size", inversedBy="orders", cascade={"persist,detach"})
     * @ORM\JoinColumn(name="size_id", referencedColumnName="id")
     */
    private $size;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @var string $surname
     *
     * @ORM\Column(name="surname", type="string", length=150)
     */
    private $surname;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=150)
     */
    private $email;

    /**
     * @var string $address
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string $address
     *
     * @ORM\Column(name="phone", type="string", length=16)
     */
    private $phone;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getTshirt() {
        return $this->tshirt;
    }

    public function setTshirt($tshirt) {
        $this->tshirt = $tshirt;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }
}
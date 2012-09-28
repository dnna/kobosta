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
     * @ORM\Column(name="scount", type="integer")
     */
    private $scount = 0;

    /**
     *
     * @ORM\Column(name="mcount", type="integer")
     */
    private $mcount = 0;

    /**
     *
     * @ORM\Column(name="lcount", type="integer")
     */
    private $lcount = 0;

    /**
     *
     * @ORM\Column(name="xlcount", type="integer")
     */
    private $xlcount = 0;

    /**
     *
     * @ORM\Column(name="xxlcount", type="integer")
     */
    private $xxlcount = 0;

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
     * @var string $phone
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

    public function getScount() {
        return $this->scount;
    }

    public function setScount($scount) {
        $this->scount = $scount;
    }

    public function getMcount() {
        return $this->mcount;
    }

    public function setMcount($mcount) {
        $this->mcount = $mcount;
    }

    public function getLcount() {
        return $this->lcount;
    }

    public function setLcount($lcount) {
        $this->lcount = $lcount;
    }

    public function getXlcount() {
        return $this->xlcount;
    }

    public function setXlcount($xlcount) {
        $this->xlcount = $xlcount;
    }

    public function getXxlcount() {
        return $this->xxlcount;
    }

    public function setXxlcount($xxlcount) {
        $this->xxlcount = $xxlcount;
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
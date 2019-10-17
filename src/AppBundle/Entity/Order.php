<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdersRepository")
 */
class Order
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;


    /**
     * @ORM\ManyToMany(targetEntity="Car", mappedBy="orders")
     */
    private $cars;

    /**
     * @ORM\ManyToMany(targetEntity="Extra", mappedBy="orders")
     *
     */
    private $extras;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="orders")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @Assert\NotNull(message="User must not be null")
     */
    private $user;

    public function __construct() {
        $this->cars = new \Doctrine\Common\Collections\ArrayCollection();
        $this->extras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Order
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Order
     */
    public function setPrice($price = 80)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getCars()
    {
        return $this->cars;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $cars
     * @return Order
     */
    public function setCars( $cars): Order
    {
        $this->cars = $cars;
        return $this;
    }
    public function addCars(Car $car): self
    {
        if (!$this->cars->contains($car)) {
            $this->cars[] = $car;
            $car->addOrder($this);
        }

        return $this;
    }

    public function addExtra(Extra $extra): self
    {
        if (!$this->extras->contains($extra)) {
            $this->extras[] = $extra;
            $extra->addOrder($this);
        }

        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $extras
     * @return Order
     */
    public function setExtras(\Doctrine\Common\Collections\ArrayCollection $extras): Order
    {
        $this->extras = $extras;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return Order
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }


}


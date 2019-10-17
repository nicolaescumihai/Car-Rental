<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarRepository")
 */
class Car
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="rented", type="boolean")
     */
    private $rented;


    /**
     * @ORM\ManyToMany(targetEntity="Order", inversedBy="cars")
     * @ORM\JoinTable(name="cars_orders")
     */
    private $orders;

    public function __construct() {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();

    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->addCars($this);
        }

        return $this;
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
     * Set name
     *
     * @param string $name
     *
     * @return Car
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Car
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set rented
     *
     * @param boolean $rented
     *
     * @return Car
     */
    public function setRented($rented)
    {
        $this->rented = $rented;

        return $this;
    }

    /**
     * Get rented
     *
     * @return bool
     */
    public function getRented()
    {
        return $this->rented;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getOrders(): \Doctrine\Common\Collections\ArrayCollection
    {
        return $this->orders;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $orders
     * @return Car
     */
    public function setOrders(\Doctrine\Common\Collections\ArrayCollection $orders): Car
    {
        $this->orders = $orders;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Car
     */
    public function setPrice(float $price = 80): Car
    {
        $this->price = $price;
        return $this;
    }


}


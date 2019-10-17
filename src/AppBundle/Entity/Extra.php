<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Extras
 *
 * @ORM\Table(name="extras")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExtrasRepository")
 */
class Extra
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
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * @ORM\ManyToMany(targetEntity="Order", inversedBy="extras")
     * @ORM\JoinTable(name="extras_orders")
     */
    private $orders;

    public function __construct() {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();

    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->addExtra($this);
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
     * @return Extra
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
     * @return Extra
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
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getOrders(): \Doctrine\Common\Collections\ArrayCollection
    {
        return $this->orders;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $orders
     * @return Extra
     */
    public function setOrders(\Doctrine\Common\Collections\ArrayCollection $orders): Extra
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
     * @return Extra
     */
    public function setPrice(float $price): Extra
    {
        $this->price = $price;
        return $this;
    }


}


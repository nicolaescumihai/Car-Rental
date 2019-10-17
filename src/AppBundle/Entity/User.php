<?php
namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Order", mappedBy="user")
     */
    protected $orders;


    public function __construct()
    {
        parent::__construct();
        $this->orders = new ArrayCollection();

    }

    /**
     * @return ArrayCollection
     */
    public function getOrders(): ArrayCollection
    {
        return $this->orders;
    }

    /**
     * @param ArrayCollection $orders
     * @return User
     */
    public function setOrders(ArrayCollection $orders): User
    {
        $this->orders = $orders;
        return $this;
    }


}
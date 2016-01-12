<?php

namespace MY\MoneyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Account
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MY\MoneyBundle\Entity\AccountRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Account
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\Length(min=2, minMessage="Le nom du compte doit faire au moins {{ limit }} caractères.")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=255)
     * @Assert\Length(min=5, minMessage="Le numéro de compte doit faire au moins {{ limit }} caractères."))
     */
    private $number;

    /**
     * @ORM\Column(name="total", type="decimal", precision=10, scale=2)
     */
    private $total = 0;

    /**
     * @ORM\Column(name="onwait", type="decimal", precision=10, scale=2)
     */
    private $onwait = 0;

    /**
     * @ORM\Column(name="creationdate", type="datetime")
     */
    private $creationdate;

    /**
     * @ORM\Column(name="lastupdate", type="datetime")
     */
    private $lastupdate;

    /**
     * @ORM\Column(name="closedate", type="datetime", nullable=true)
     */
    private $closedate;

    /**
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled = true;


    /**
     * @ORM\ManyToOne(targetEntity="MY\MoneyBundle\Entity\Bank", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $banks;

    /**
     * @ORM\OneToMany(targetEntity="MY\MoneyBundle\Entity\Transaction", mappedBy="account", cascade={"remove"})
     */
    private $transactions;

    /**
     * @ORM\ManyToOne(targetEntity="MY\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $users;


    public function __construct()
    {
        $this->creationdate = new \Datetime;
        $this->lastupdate   = new \Datetime;
        $this->banks        = new ArrayCollection();
        $this->transactions = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
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
     * @return Account
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
     * Set number
     *
     * @param string $number
     *
     * @return Account
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Account
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set onwait
     *
     * @param string $onwait
     *
     * @return Account
     */
    public function setOnwait($onwait)
    {
        $this->onwait = $onwait;

        return $this;
    }

    /**
     * Get onwait
     *
     * @return string
     */
    public function getOnwait()
    {
        return $this->onwait;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Account
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
     * Get creationdate
     *
     * @return \DateTime
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Set lastupdate
     *
     * @param \DateTime $lastupdate
     *
     * @return Account
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;

        return $this;
    }

    /**
     * Get lastupdate
     *
     * @return \DateTime
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }

    /**
     * Set closedate
     *
     * @param \DateTime $closedate
     *
     * @return Account
     */
    public function setClosedate($closedate)
    {
        $this->closedate = $closedate;

        return $this;
    }

    /**
     * Get closedate
     *
     * @return \DateTime
     */
    public function getClosedate()
    {
        return $this->closedate;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Account
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set bank
     *
     * @param \MY\MoneyBundle\Entity\Bank $bank
     *
     * @return Account
     */
    public function setBank(Bank $bank = null)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return Bank
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set banks
     *
     * @param \MY\MoneyBundle\Entity\Bank $banks
     *
     * @return Account
     */
    public function setBanks(\MY\MoneyBundle\Entity\Bank $banks = null)
    {
        $this->banks = $banks;

        return $this;
    }

    /**
     * Get banks
     *
     * @return \MY\MoneyBundle\Entity\Bank
     */
    public function getBanks()
    {
        return $this->banks;
    }

    /**
     * Add Transaction
     * @return \MY\MoneyBundle\Entity\Transaction
     */
    public function addTransaction(Transaction $transaction)
    {
        $this->transactions[] = $transaction;
        $transaction->setAccount($this);

        return $this;
    }

    /**
     * Remove Transaction
     */
    public function removeTransaction(Transaction $transaction)
    {
        $this->transactions->removeElement($transaction);
        $transaction->setAccount(null);
    }

    /**
     * Get transacations
     *
     * @return \MY\MoneyBundle\Entity\Transaction
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
    * @ORM\PrePersist()
    **/
    public function preInsert()
    {
        $this->onwait = $this->total;
    }

    /**
     * Set users
     *
     * @param \MY\UserBundle\Entity\User $users
     *
     * @return Account
     */
    public function setUsers(\MY\UserBundle\Entity\User $users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \MY\UserBundle\Entity\User
     */
    public function getUsers()
    {
        return $this->users;
    }
}

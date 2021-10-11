<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pwd", type="string", length=255, nullable=true)
     */
    private $pwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbresponse", type="integer", nullable=true)
     */
    private $nbresponse;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=false)
     */
    private $role;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=true)
     */
    private $newsletter = true;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="activated", type="boolean", nullable=true)
     */
    private $activated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="subdate", type="datetime", nullable=true)
     */
    private $subdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imgsrc", type="string", length=255, nullable=true)
     */
    private $imgsrc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbquestion", type="integer", nullable=true)
     */
    private $nbquestion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Interest", inversedBy="users")
     * @ORM\JoinTable(name="users_interest",
     *   joinColumns={
     *     @ORM\JoinColumn(name="users_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="interest_id", referencedColumnName="id")
     *   }
     * )
     */
    private $interest;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->interest = new ArrayCollection();
    }


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     */
    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     */
    public function setMail($mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of pwd
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     */
    public function setPwd($pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getNbresponse(): ?int
    {
        return $this->nbresponse;
    }

    public function setNbresponse(?int $nbresponse): self
    {
        $this->nbresponse = $nbresponse;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    public function setNewsletter(?bool $newsletter): self
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    public function getActivated(): ?bool
    {
        return $this->activated;
    }

    public function setActivated(?bool $activated): self
    {
        $this->activated = $activated;

        return $this;
    }

    public function getSubdate(): ?\DateTimeInterface
    {
        return $this->subdate;
    }

    public function setSubdate(?\DateTimeInterface $subdate): self
    {
        $this->subdate = $subdate;

        return $this;
    }

    public function getImgsrc(): ?string
    {
        return $this->imgsrc;
    }

    public function setImgsrc(?string $imgsrc): self
    {
        $this->imgsrc = $imgsrc;

        return $this;
    }

    public function getNbquestion(): ?int
    {
        return $this->nbquestion;
    }

    public function setNbquestion(?int $nbquestion): self
    {
        $this->nbquestion = $nbquestion;

        return $this;
    }

    /**
     * @return Collection|Interest[]
     */
    public function getInterest(): Collection
    {
        return $this->interest;
    }

    public function addInterest(Interest $interest): self
    {
        if (!$this->interest->contains($interest)) {
            $this->interest[] = $interest;
        }

        return $this;
    }

    public function removeInterest(Interest $interest): self
    {
        $this->interest->removeElement($interest);

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pwd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbresponse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $newsletter;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $activated;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $subdate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgsrc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbquestion;

    /**
     * @ORM\ManyToMany(targetEntity=Interest::class, inversedBy="users")
     */
    private $interest;

    /**
     * @ORM\OneToMany(targetEntity=Files::class, mappedBy="users")
     */
    private $files;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="users")
     */
    private $articles;

    public function __construct()
    {
        $this->interest = new ArrayCollection();
        $this->files = new ArrayCollection();
        $this->articles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(?string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
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

    /**
     * @return Collection|Files[]
     */
    public function getFiles(): Collection
    {
        return $this->files;
    }

    public function addFile(Files $file): self
    {
        if (!$this->files->contains($file)) {
            $this->files[] = $file;
            $file->setUsers($this);
        }

        return $this;
    }

    public function removeFile(Files $file): self
    {
        if ($this->files->removeElement($file)) {
            // set the owning side to null (unless already changed)
            if ($file->getUsers() === $this) {
                $file->setUsers(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setUsers($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getUsers() === $this) {
                $article->setUsers(null);
            }
        }

        return $this;
    }
}

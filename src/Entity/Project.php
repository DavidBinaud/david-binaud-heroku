<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use App\Repository\TagsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pic_url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skills;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $prize;

    /**
     * @ORM\Column(type="array")
     */
    private $links = [];

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="projects")
     */
    private $tags;

    /**
     * @ORM\Column(type="text")
     */
    private $abstract;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bg_position;

    /**
     * @ORM\Column(type="boolean")
     */
    private $can_be_seen;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $modal_raw;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPicUrl(): ?string
    {
        return $this->pic_url;
    }

    public function setPicUrl(string $pic_url): self
    {
        $this->pic_url = $pic_url;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrize(): ?int
    {
        return $this->prize;
    }

    public function setPrize(int $prize): self
    {
        $this->prize = $prize;

        return $this;
    }

    public function getLinks(): ?array
    {
        return $this->links;
    }

    public function setLinks(array $links): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        $this->tags->removeElement($tag);

        return $this;
    }

    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    public function setAbstract(string $abstract): self
    {
        $this->abstract = $abstract;

        return $this;
    }

    public function getBgPosition(): ?string
    {
        return $this->bg_position;
    }

    public function setBgPosition(string $bg_position): self
    {
        $this->bg_position = $bg_position;

        return $this;
    }

    public function getCanBeSeen(): ?bool
    {
        return $this->can_be_seen;
    }

    public function setCanBeSeen(bool $can_be_seen): self
    {
        $this->can_be_seen = $can_be_seen;

        return $this;
    }

    public function getModalRaw(): ?string
    {
        return $this->modal_raw;
    }

    public function setModalRaw(?string $modal_raw): self
    {
        $this->modal_raw = $modal_raw;

        return $this;
    }
}

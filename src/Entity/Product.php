<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    private ?string $ref = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'categ')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categori $category ;

    #[ORM\Column(length: 255)]
    private ?string $colors = null;

    #[ORM\Column(length: 255)]
    private ?string $taille = null;

    #[ORM\Column(length: 255)]
    private ?string $material = null;

    #[ORM\Column(length: 255)]
    private ?string $Collection = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): static
    {
        $this->ref = $ref;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getCategory(): ?Categori
    {
        return $this->category;
    }

    public function setCategory(?Categori $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getColors(): ?string
    {
        return $this->colors;
    }

    public function setColors(string $colors): static
    {
        $this->colors = $colors;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(string $material): static
    {
        $this->material = $material;

        return $this;
    }

    public function getCollection(): ?string
    {
        return $this->Collection;
    }

    public function setCollection(string $Collection): static
    {
        $this->Collection = $Collection;

        return $this;
    }
}

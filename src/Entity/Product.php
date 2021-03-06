<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{

    public static function loadValidatorMetadata(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('name', new NotBlank());
        $metadata->addPropertyConstraint('price', new NotBlank());
        $metadata->addPropertyConstraint('price', new Assert\Positive());
        $metadata->addPropertyConstraint('price', new Assert\GreaterThan(0));
        $metadata->addPropertyConstraint('quantity', new NotBlank());
        $metadata->addPropertyConstraint('quantity', new Assert\Positive());
        $metadata->addPropertyConstraint('quantity', new Assert\GreaterThan(0));
        $metadata->addPropertyConstraint('description', new NotBlank());


     

    }
    
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
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\JoinColumn(name="CartProds", referencedColumnName="idprod", onDelete="CASCADE")
     * @ORM\OneToMany(targetEntity=CartProds::class, mappedBy="idprod",cascade={"remove"})
     */
    private $idcart;

    public function __construct()
    {
        
        $this->idcart = new ArrayCollection();
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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

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

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
    
    public function __toString()
{
    
    return (string) $this->getId();

}

    /**
     * @return Collection<int, CartProds>
     */
    public function getIdcart(): Collection
    {
        return $this->idcart;
    }

    public function addIdcart(CartProds $idcart): self
    {
        if (!$this->idcart->contains($idcart)) {
            $this->idcart[] = $idcart;
            $idcart->setIdprod($this);
        }

        return $this;
    }

    public function removeIdcart(CartProds $idcart): self
    {
        if ($this->idcart->removeElement($idcart)) {
            // set the owning side to null (unless already changed)
            if ($idcart->getIdprod() === $this) {
                $idcart->setIdprod(null);
            }
        }

        return $this;
    }
    
}

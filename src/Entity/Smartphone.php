<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SmartphoneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     attributes={
 *         "security"="is_granted('ROLE_USER')",
 *         "order"={"id":"DESC"}
 *     },
 *     paginationItemsPerPage=5,
 *     collectionOperations={
 *         "get",
 *         "post"={"security"="is_granted('ROLE_ADMIN')"}
 *     },
 *     itemOperations={
 *         "get",
 *         "put"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *          },
 *         "delete"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *          },
 *         "patch"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *          },
 *     }
 * )
 * @ORM\Entity(repositoryClass=SmartphoneRepository::class)
 */
class Smartphone
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $camera;

    /**
     * @ORM\Column(type="float")
     */
    private $screen;

    /**
     * @ORM\Column(type="integer")
     */
    private $memory;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCamera(): ?int
    {
        return $this->camera;
    }

    public function setCamera(int $camera): self
    {
        $this->camera = $camera;

        return $this;
    }

    public function getScreen(): ?float
    {
        return $this->screen;
    }

    public function setScreen(float $screen): self
    {
        $this->screen = $screen;

        return $this;
    }

    public function getMemory(): ?int
    {
        return $this->memory;
    }

    public function setMemory(int $memory): self
    {
        $this->memory = $memory;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}

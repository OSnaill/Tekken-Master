<?php

namespace App\Entity;

use App\Repository\ArchetypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArchetypeRepository::class)]
class Archetype
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 65)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Character::class, inversedBy: 'archetypes')]
    private Collection $character_id;

    public function __construct()
    {
        $this->character_id = new ArrayCollection();
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

    /**
     * @return Collection<int, Character>
     */
    public function getCharacterId(): Collection
    {
        return $this->character_id;
    }

    public function addCharacterId(Character $characterId): self
    {
        if (!$this->character_id->contains($characterId)) {
            $this->character_id->add($characterId);
        }

        return $this;
    }

    public function removeCharacterId(Character $characterId): self
    {
        $this->character_id->removeElement($characterId);

        return $this;
    }
}

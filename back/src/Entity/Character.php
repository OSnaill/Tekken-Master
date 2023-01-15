<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
#[ORM\Table(name: '`character`')]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * Character Name
     */
    #[ORM\Column(length: 65)]
    private ?string $name = null;

    /**
     * Character description
     */
    #[ORM\Column(length: 255)]
    private ?string $description = null;

    /**
     * Character Strength, it is an array
     */
    #[ORM\Column(type: Types::ARRAY)]

    private array $strength = [];
    /**
     * Character Weaknesses, it is an array
     */
    #[ORM\Column(type: Types::ARRAY)]
    private array $weaknesses = [];

    /**
     * on a 20 scale, execution rate
     */
    #[ORM\Column]
    private ?int $execution = null;
    /**
     * on a 20 scale, poking rate
     */
    #[ORM\Column]
    private ?int $poking = null;
    /**
     * on a 20 scale, keepout rate
     */
    #[ORM\Column]
    private ?int $keepout = null;
    /**
     * on a 20 scale, damage output rate
     */
    #[ORM\Column]
    private ?int $damage_output = null;
    /**
     * on a 20 scale, throw game rate
     */
    #[ORM\Column]
    private ?int $throw_game = null;
    /**
     * on a 20 scale, evasiveness rate
     */
    #[ORM\Column]
    private ?int $evasiveness = null;
    /**
     * on a 20 scale, movement rate
     */
    #[ORM\Column]
    private ?int $movement = null;
    /**
     * on a 20 scale, mixup rate
     */
    #[ORM\Column]
    private ?int $mixup = null;
    /**
     * on a 20 scale, party potential rate
     */
    #[ORM\Column]
    private ?int $party_potential = null;
    /**
     * Character key moves and their frames
     */
    #[ORM\Column(type: Types::ARRAY)]
    private array $key_moves = [];

    /**
     * 10 frame punisher, can't be empty
     */
    #[ORM\Column(length: 9)]
    private ?string $ten_f_punish = null;
    /*
     * 12 frame punisher, can be empty
     */
    #[ORM\Column(length: 9, nullable: true)]
    private ?string $twelve_f_punish = null;
    /*
     * 13 frame punisher, can be empty
     */
    #[ORM\Column(length: 9, nullable: true)]
    private ?string $thirteen_f_punish = null;
    /*
     * 14 frame punisher, can be empty
     */
    #[ORM\Column(length: 9, nullable: true)]
    private ?string $fourteen_f_punish = null;
    /*
     * 15 frame punisher, can be empty
     */
    #[ORM\Column(length: 9, nullable: true)]
    private ?string $fifteen_f_punish = null;

    /**
     * Which way to side step
     */
    #[ORM\Column(length: 25)]
    private ?string $weak_side = null;

    #[ORM\ManyToMany(targetEntity: Archetype::class, mappedBy: 'character_id')]
    private Collection $archetypes;

    public function __construct()
    {
        $this->archetypes = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStrength(): array
    {
        return $this->strength;
    }

    public function setStrength(array $strength): self
    {
        $this->strength = $strength;

        return $this;
    }

    public function getWeaknesses(): array
    {
        return $this->weaknesses;
    }

    public function setWeaknesses(array $weaknesses): self
    {
        $this->weaknesses = $weaknesses;

        return $this;
    }

    public function getExecution(): ?int
    {
        return $this->execution;
    }

    public function setExecution(int $execution): self
    {
        $this->execution = $execution;

        return $this;
    }

    public function getPoking(): ?int
    {
        return $this->poking;
    }

    public function setPoking(int $poking): self
    {
        $this->poking = $poking;

        return $this;
    }

    public function getKeepout(): ?int
    {
        return $this->keepout;
    }

    public function setKeepout(int $keepout): self
    {
        $this->keepout = $keepout;

        return $this;
    }

    public function getDamageOutput(): ?int
    {
        return $this->damage_output;
    }

    public function setDamageOutput(int $damage_output): self
    {
        $this->damage_output = $damage_output;

        return $this;
    }

    public function getThrowGame(): ?int
    {
        return $this->throw_game;
    }

    public function setThrowGame(int $throw_game): self
    {
        $this->throw_game = $throw_game;

        return $this;
    }

    public function getEvasiveness(): ?int
    {
        return $this->evasiveness;
    }

    public function setEvasiveness(int $evasiveness): self
    {
        $this->evasiveness = $evasiveness;

        return $this;
    }

    public function getMovement(): ?int
    {
        return $this->movement;
    }

    public function setMovement(int $movement): self
    {
        $this->movement = $movement;

        return $this;
    }

    public function getMixup(): ?int
    {
        return $this->mixup;
    }

    public function setMixup(int $mixup): self
    {
        $this->mixup = $mixup;

        return $this;
    }

    public function getPartyPotential(): ?int
    {
        return $this->party_potential;
    }

    public function setPartyPotential(int $party_potential): self
    {
        $this->party_potential = $party_potential;

        return $this;
    }

    public function getKeyMoves(): array
    {
        return $this->key_moves;
    }

    public function setKeyMoves(array $key_moves): self
    {
        $this->key_moves = $key_moves;

        return $this;
    }

    public function getTenFPunish(): ?string
    {
        return $this->ten_f_punish;
    }

    public function setTenFPunish(string $ten_f_punish): self
    {
        $this->ten_f_punish = $ten_f_punish;

        return $this;
    }

    public function getTwelveFPunish(): ?string
    {
        return $this->twelve_f_punish;
    }

    public function setTwelveFPunish(?string $twelve_f_punish): self
    {
        $this->twelve_f_punish = $twelve_f_punish;

        return $this;
    }

    public function getThirteenFPunish(): ?string
    {
        return $this->thirteen_f_punish;
    }

    public function setThirteenFPunish(?string $thirteen_f_punish): self
    {
        $this->thirteen_f_punish = $thirteen_f_punish;

        return $this;
    }

    public function getFourteenFPunish(): ?string
    {
        return $this->fourteen_f_punish;
    }

    public function setFourteenFPunish(?string $fourteen_f_punish): self
    {
        $this->fourteen_f_punish = $fourteen_f_punish;

        return $this;
    }

    public function getFifteenFPunish(): ?string
    {
        return $this->fifteen_f_punish;
    }

    public function setFifteenFPunish(?string $fifteen_f_punish): self
    {
        $this->fifteen_f_punish = $fifteen_f_punish;

        return $this;
    }

    public function getWeakSide(): ?string
    {
        return $this->weak_side;
    }

    public function setWeakSide(string $weak_side): self
    {
        $this->weak_side = $weak_side;

        return $this;
    }

    /**
     * @return Collection<int, Archetype>
     */
    public function getArchetypes(): Collection
    {
        return $this->archetypes;
    }

    public function addArchetype(Archetype $archetype): self
    {
        if (!$this->archetypes->contains($archetype)) {
            $this->archetypes->add($archetype);
            $archetype->addCharacterId($this);
        }

        return $this;
    }

    public function removeArchetype(Archetype $archetype): self
    {
        if ($this->archetypes->removeElement($archetype)) {
            $archetype->removeCharacterId($this);
        }

        return $this;
    }
}

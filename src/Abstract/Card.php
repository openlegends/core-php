<?php

declare(strict_types=1);

namespace OpenLegends\Core\Abstract;

abstract class Card implements \OpenLegends\Core\Interface\Card
{
    private \OpenLegends\Core\Abstract\Card\Ability $_ability;
    private \OpenLegends\Core\Abstract\Card\Attribute $_attribute;
    private \OpenLegends\Core\Abstract\Card\Rarity $_rarity;
    private \OpenLegends\Core\Abstract\Card\Type $_type;

    private string $_name;
    private string $_description;

    private int $_cost;
    private int $_power;
    private int $_health;
    private int $_craft;
    private int $_extract;

    private bool $_breakthrough;
    private bool $_cover;
    private bool $_drain;
    private bool $_guard;
    private bool $_lethal;
    private bool $_pilfer;
    private bool $_prophecy;
    private bool $_unique;

    abstract public function __construct();

    abstract public function act(
        \OpenLegends\Core\Abstract\Game &$game
    ): void;

    public function getBreakthrough(): bool
    {
        return $this->_breakthrough;
    }

    public function setBreakthrough(bool $value): void
    {
        $this->_breakthrough = $value;
    }

    public function getCover(): bool
    {
        return $this->_cover;
    }

    public function setCover(bool $value): void
    {
        $this->_cover = $value;
    }

    public function getDrain(): bool
    {
        return $this->_drain;
    }

    public function setDrain(bool $value): void
    {
        $this->_drain = $value;
    }

    public function getGuard(): bool
    {
        return $this->_guard;
    }

    public function setGuard(bool $value): void
    {
        $this->_guard = $value;
    }

    public function getLethal(): bool
    {
        return $this->_lethal;
    }

    public function setLethal(bool $value): void
    {
        $this->_lethal = $value;
    }

    public function getPilfer(): bool
    {
        return $this->_pilfer;
    }

    public function setPilfer(bool $value): void
    {
        $this->_pilfer = $value;
    }

    public function getProphecy(): bool
    {
        return $this->_prophecy;
    }

    public function setProphecy(bool $value): void
    {
        $this->_prophecy = $value;
    }

    public function getUnique(): bool
    {
        return $this->_unique;
    }

    public function setUnique(bool $value): void
    {
        $this->_unique= $value;
    }

    public function getName(): string
    {
        return $this->_name;
    }

    public function setName(string $value): void
    {
        $this->_name = $value;
    }

    public function getDescription(): string
    {
        return $this->_description;
    }

    public function setDescription(string $value): void
    {
        $this->_description = $value;
    }

    public function getCost(): string
    {
        return $this->_cost;
    }

    public function setCost(int $value): void
    {
        $this->_cost = $value;
    }

    public function getPower(): int
    {
        return $this->_power;
    }

    public function setPower(int $value): void
    {
        $this->_power = $value;
    }

    public function getHealth(): int
    {
        return $this->_health;
    }

    public function setHealth(int $value): void
    {
        $this->_health = $value;
    }

    public function getCraft(): int
    {
        return $this->_craft;
    }

    public function setCraft(int $value): void
    {
        $this->_craft = $value;
    }

    public function getExtract(): int
    {
        return $this->_extract;
    }

    public function setExtract(int $value): void
    {
        $this->_extract = $value;
    }

    public function setAbility(
        \OpenLegends\Core\Abstract\Card\Ability $ability
    ): void
    {
        $this->_ability = $ability;
    }

    public function getAbility(): \OpenLegends\Core\Abstract\Card\Ability
    {
        return $this->_ability;
    }

    public function setAttribute(
        \OpenLegends\Core\Abstract\Card\Attribute $attribute
    ): void
    {
        $this->_attribute = $attribute;
    }

    public function getAttribute(): \OpenLegends\Core\Abstract\Card\Attribute
    {
        return $this->_attribute;
    }

    public function setType(
        \OpenLegends\Core\Abstract\Card\Type $type
    ): void
    {
        $this->_type = $type;
    }

    public function getType(): \OpenLegends\Core\Abstract\Card\Type
    {
        return $this->_type;
    }

    public function setRarity(
        \OpenLegends\Core\Abstract\Card\Rarity $rarity
    ): void
    {
        $this->_rarity = $rarity;
    }

    public function getRarity(): \OpenLegends\Core\Abstract\Card\Rarity
    {
        return $this->_rarity;
    }
}
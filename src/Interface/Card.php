<?php

declare(strict_types=1);

namespace OpenLegends\Core\Interface;

interface Card
{
    public function __construct();

    public function act(
        \OpenLegends\Core\Abstract\Game &$game
    ): void;

    public function getBreakthrough(): bool;

    public function setBreakthrough(bool $value): void;

    public function getCover(): bool;

    public function setCover(bool $value): void;

    public function getDrain(): bool;

    public function setDrain(bool $value): void;

    public function getGuard(): bool;

    public function setGuard(bool $value): void;

    public function getLethal(): bool;

    public function setLethal(bool $value): void;

    public function getPilfer(): bool;

    public function setPilfer(bool $value): void;

    public function getProphecy(): bool;

    public function setProphecy(bool $value): void;

    public function getUnique(): bool;

    public function setUnique(bool $value): void;

    public function getName(): string;

    public function setName(string $value): void;

    public function getDescription(): string;

    public function setDescription(string $value): void;

    public function getCost(): string;

    public function setCost(int $value): void;

    public function getPower(): int;

    public function setPower(int $value): void;

    public function getHealth(): int;

    public function setHealth(int $value): void;

    public function getCraft(): int;

    public function setCraft(int $value): void;

    public function getExtract(): int;

    public function setExtract(int $value): void;

    public function setAbility(
        \OpenLegends\Core\Abstract\Card\Ability $ability
    ): void;

    public function getAbility(): \OpenLegends\Core\Abstract\Card\Ability;

    public function setAttribute(
        \OpenLegends\Core\Abstract\Card\Attribute $attribute
    ): void;

    public function getAttribute(): \OpenLegends\Core\Abstract\Card\Attribute;

    public function setType(
        \OpenLegends\Core\Abstract\Card\Type $type
    ): void;

    public function getType(): \OpenLegends\Core\Abstract\Card\Type;

    public function setRarity(
        \OpenLegends\Core\Abstract\Card\Rarity $rarity
    ): void;

    public function getRarity(): \OpenLegends\Core\Abstract\Card\Rarity;
}
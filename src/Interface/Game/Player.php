<?php

declare(strict_types=1);

namespace OpenLegends\Core\Interface\Game;

interface Player
{
    public function __construct();

    public function setHealth(
        int $value
    ): void;

    public function getHealth(): int;

    public function getUser(): \OpenLegends\Core\Abstract\User;

    public function setUser(
        \OpenLegends\Core\Abstract\User $user
    ): void;

    public function getDeck(): \OpenLegends\Core\Abstract\Pool\Card;

    public function setDeck(
        \OpenLegends\Core\Abstract\Pool\Card $deck
    ): void;

    public function getHand(): \OpenLegends\Core\Abstract\Pool\Card;

    public function setHand(
        \OpenLegends\Core\Abstract\Pool\Card $hand
    ): void;

    public function getPile(): \OpenLegends\Core\Abstract\Pool\Card;

    public function setPile(
        \OpenLegends\Core\Abstract\Pool\Card $pile
    ): void;

    public function getLeft(): \OpenLegends\Core\Abstract\Pool\Card;

    public function setLeft(
        \OpenLegends\Core\Abstract\Pool\Card $left
    ): void;

    public function getRight(): \OpenLegends\Core\Abstract\Pool\Card;

    public function setRight(
        \OpenLegends\Core\Abstract\Pool\Card $right
    ): void;
}
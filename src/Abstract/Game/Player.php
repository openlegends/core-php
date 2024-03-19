<?php

declare(strict_types=1);

namespace OpenLegends\Core\Abstract\Game;

abstract class Player implements \OpenLegends\Core\Interface\Game\Player
{
    private \OpenLegends\Core\Abstract\User $_user;

    private \OpenLegends\Core\Abstract\Pool\Card $_deck;
    private \OpenLegends\Core\Abstract\Pool\Card $_hand;
    private \OpenLegends\Core\Abstract\Pool\Card $_pile;

    private \OpenLegends\Core\Abstract\Pool\Card $_left;
    private \OpenLegends\Core\Abstract\Pool\Card $_right;

    private int $_health;

    abstract public function __construct();

    public function setHealth(
        int $value
    ): void
    {
        $this->_health = $value;
    }

    public function getHealth(): int
    {
        return $this->_health;
    }

    public function getUser(): \OpenLegends\Core\Abstract\User
    {
        return $this->_user;
    }

    public function setUser(
        \OpenLegends\Core\Abstract\User $user
    ): void
    {
        $this->_user = $user;
    }

    public function getDeck(): \OpenLegends\Core\Abstract\Pool\Card
    {
        return $this->_deck;
    }

    public function setDeck(
        \OpenLegends\Core\Abstract\Pool\Card $deck
    ): void
    {
        $this->_deck = $deck;
    }

    public function getHand(): \OpenLegends\Core\Abstract\Pool\Card
    {
        return $this->_hand;
    }

    public function setHand(
        \OpenLegends\Core\Abstract\Pool\Card $hand
    ): void
    {
        $this->_hand = $hand;
    }

    public function getPile(): \OpenLegends\Core\Abstract\Pool\Card
    {
        return $this->_pile;
    }

    public function setPile(
        \OpenLegends\Core\Abstract\Pool\Card $pile
    ): void
    {
        $this->_pile = $pile;
    }

    public function getLeft(): \OpenLegends\Core\Abstract\Pool\Card
    {
        return $this->_left;
    }

    public function setLeft(
        \OpenLegends\Core\Abstract\Pool\Card $left
    ): void
    {
        $this->_left = $left;
    }

    public function getRight(): \OpenLegends\Core\Abstract\Pool\Card
    {
        return $this->_right;
    }

    public function setRight(
        \OpenLegends\Core\Abstract\Pool\Card $right
    ): void
    {
        $this->_right = $right;
    }
}
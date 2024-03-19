<?php

declare(strict_types=1);

namespace OpenLegends\Core\Abstract;

abstract class Game implements \OpenLegends\Core\Interface\Game
{
    private array $_players = [];

    private int $_act = 0;

    abstract public function __construct();

    abstract public function start(): void;

    abstract public function act(): void;

    abstract public function end(): void;

    public function addPlayer(
        \OpenLegends\Core\Abstract\Game\Player $player
    ): void
    {
        $this->_players[] = $player;
    }

    public function getPlayer(
        int $slot
    ): \OpenLegends\Core\Abstract\Game\Player
    {
        return $this->_players[
            $slot
        ];
    }

    public function setAct(
        int $value
    ): void
    {
        $this->_act = $value;
    }

    public function getAct(): int
    {
        return $this->_act;
    }
}
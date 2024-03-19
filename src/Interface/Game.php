<?php

declare(strict_types=1);

namespace OpenLegends\Core\Interface;

interface Game
{
    public function __construct();

    public function start(): void;

    public function act(): void;

    public function end(): void;

    public function addPlayer(
        \OpenLegends\Core\Abstract\Game\Player $player
    ): void;

    public function getPlayer(
        int $slot
    ): \OpenLegends\Core\Abstract\Game\Player;

    public function setAct(
        int $value
    ): void;

    public function getAct(): int;
}
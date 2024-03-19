<?php

declare(strict_types=1);

namespace OpenLegends\Core\Abstract\Card;

abstract class Action implements \OpenLegends\Core\Interface\Card\Action
{
    abstract public function __construct(
        \OpenLegends\Core\Abstract\Card $card
    );

    abstract public function card(
        \OpenLegends\Core\Abstract\Card &$card
    ): void;

    abstract public function player(
        \OpenLegends\Core\Abstract\Player &$player
    ): void;
}
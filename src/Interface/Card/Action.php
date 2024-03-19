<?php

declare(strict_types=1);

namespace OpenLegends\Core\Interface\Card;

interface Action
{
    public function __construct(
        \OpenLegends\Core\Abstract\Card $card
    );

    public function card(
        \OpenLegends\Core\Abstract\Card &$card
    ): void;

    public function player(
        \OpenLegends\Core\Abstract\Player &$player
    ): void;
}
<?php

declare(strict_types=1);

namespace OpenLegends\Core\Interface\Pool;

interface Card
{
    public function getCard(
        int $slot
    ): \OpenLegends\Core\Abstract\Card;

    public function addCard(
        \OpenLegends\Core\Abstract\Card $card
    ): void;

    public function deleteCard(
        int $slot
    ): void;

    public function getTopCard(
        ?int &$slot = null
    ): \OpenLegends\Core\Abstract\Card;

    public function getBottomCard(
        ?int &$slot = null
    ): \OpenLegends\Core\Abstract\Card;

    public function getRandomCard(
        ?int &$slot = null
    ): \OpenLegends\Core\Abstract\Card;

    public function shuffleCards(): void;
}
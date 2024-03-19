<?php

declare(strict_types=1);

namespace OpenLegends\Core\Abstract\Pool;

abstract class Card implements \OpenLegends\Core\Interface\Pool\Card
{
    private array $_cards = [];

    public function getCard(
        int $slot
    ): \OpenLegends\Core\Abstract\Card
    {
        return $this->_cards[
            $slot
        ];
    }

    public function addCard(
        \OpenLegends\Core\Abstract\Card $card
    ): void
    {
        $this->_cards[] = $card;
    }

    public function deleteCard(
        int $slot
    ): void
    {
        unset(
            $this->_cards[
                $slot
            ]
        );
    }

    public function getTopCard(
        ?int &$slot = null
    ): \OpenLegends\Core\Abstract\Card
    {
        $slot = array_key_first(
            $this->_cards
        );

        return $this->_cards[
            $slot
        ];
    }

    public function getBottomCard(
        ?int &$slot = null
    ): \OpenLegends\Core\Abstract\Card
    {
        $slot = array_key_last(
            $this->_cards
        );

        return $this->_cards[
            $slot
        ];
    }

    public function getRandomCard(
        ?int &$slot = null
    ): \OpenLegends\Core\Abstract\Card
    {
        $slot = array_rand(
            $this->_cards
        );

        return $this->_cards[
            $slot
        ];
    }

    public function shuffleCards(): void
    {
        shuffle(
            $this->_cards
        );
    }
}
<?php

declare(strict_types=1);

namespace OpenLegends\Core\Abstract\Card;

abstract class Ability implements \OpenLegends\Core\Interface\Card\Ability
{
    private string $_name;
    private string $_description;

    abstract public function __construct();

    public function setName(string $value): void
    {
        $this->_name = $value;
    }

    public function getName(): string
    {
        return $this->_name;
    }

    public function setDescription(string $value): void
    {
        $this->_description = $value;
    }

    public function getDescription(): string
    {
        return $this->_description;
    }
}
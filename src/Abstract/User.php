<?php

declare(strict_types=1);

namespace OpenLegends\Core\Abstract;

abstract class User implements \OpenLegends\Core\Interface\User
{
    abstract public function __construct();

    private \OpenLegends\Core\Abstract\User\Type $_type;

    private string $_name;

    public function setType(
        \OpenLegends\Core\Abstract\User\Type $type
    ): void
    {
        $this->_type = $type;
    }

    public function getType(): \OpenLegends\Core\Abstract\User\Type
    {
        return $this->_type;
    }

    public function setName(
        string $value
    ): void
    {
        $this->_name = $value;
    }

    public function getName(): string
    {
        return $this->_name;
    }
}
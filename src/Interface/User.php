<?php

declare(strict_types=1);

namespace OpenLegends\Core\Interface;

interface User
{
    public function __construct();

    public function setType(
        \OpenLegends\Core\Abstract\User\Type $type
    ): void;

    public function getType(): \OpenLegends\Core\Abstract\User\Type;

    public function setName(
        string $value
    ): void;

    public function getName(): string;
}
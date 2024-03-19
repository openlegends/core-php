<?php

declare(strict_types=1);

namespace OpenLegends\Core\Interface\User;

interface Type
{
    public function setName(string $value): void;

    public function getName(): string;

    public function setDescription(string $value): void;

    public function getDescription(): string;
}
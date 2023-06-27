<?php

declare(strict_types = 1);

namespace Bootles\Core\Contracts;

interface OwnableInterface
{
    public function getUser(): UserInterface;
}

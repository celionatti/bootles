<?php

declare(strict_types = 1);

namespace Bootles\Core\Contracts;

interface RequestValidatorFactoryInterface
{
    public function make(string $class): RequestValidatorInterface;
}

<?php

declare(strict_types = 1);

namespace Bootles\Core\Contracts;

interface RequestValidatorInterface
{
    public function validate(array $data): array;
}

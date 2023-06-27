<?php

declare(strict_types = 1);

namespace Bootles\Core\Contracts;

use Bootles\Core\DataObjects\RegisterUserData;

interface UserProviderServiceInterface
{
    public function getById(int $userId): ?UserInterface;

    public function getByCredentials(array $credentials): ?UserInterface;

    public function createUser(RegisterUserData $data): UserInterface;

    public function verifyUser(UserInterface $user): void;

    public function updatePassword(UserInterface $user, string $password): void;
}

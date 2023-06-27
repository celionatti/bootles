<?php

declare(strict_types = 1);

namespace Bootles\Core\Contracts;

use Bootles\Core\DataObjects\RegisterUserData;
use Bootles\Core\Enum\AuthAttemptStatus;

interface AuthInterface
{
    public function user(): ?UserInterface;

    public function attemptLogin(array $credentials): AuthAttemptStatus;

    public function checkCredentials(UserInterface $user, array $credentials): bool;

    public function logOut(): void;

    public function register(RegisterUserData $data): UserInterface;

    public function logIn(UserInterface $user): void;

    public function attemptTwoFactorLogin(array $data): bool;
}

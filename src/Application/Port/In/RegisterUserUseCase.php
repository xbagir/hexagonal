<?php

declare(strict_types=1);

namespace Hexagonal\Application\Port\In;

interface RegisterUserUseCase
{
    public function registerUser(RegisterUserCommand $command);
}
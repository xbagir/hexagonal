<?php

declare(strict_types=1);

use Hexagonal\Application\Port\In\RegisterUserCommand;

/**
 * Class RegisterUserService
 *
 * @author Maxim Bagirov <xbagir@gmail.com>
 */
class RegisterUserService implements RegisterUserUseCase
{
    /**
     * @param RegisterUserCommand $command
     */
    public function registerUser(RegisterUserCommand $command)
    {

    }
}
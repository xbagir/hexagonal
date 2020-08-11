<?php

declare(strict_types=1);

namespace Hexagonal\Adapter\In\Web;

use Hexagonal\Application\Port\In\RegisterUserCommand;
use Hexagonal\Application\Port\In\RegisterUserUseCase;

/**
 * Class RegisterController
 *
 * @package Hexagonal\Adapter\In\Web
 * @author  Maxim Bagirov <xbagir@gmail.com>
 */
class RegisterController
{
    /**
     * @var RegisterUserUseCase
     */
    private RegisterUserUseCase $registerUserUseCase;

    /**
     * RegisterController constructor.
     *
     * @param RegisterUserUseCase $registerUserUseCase
     */
    public function __construct(RegisterUserUseCase $registerUserUseCase)
    {
        $this->registerUserUseCase = $registerUserUseCase;
    }

    public function index()
    {
        $command = new RegisterUserCommand(
            'xbagir@gmail.com',
            'qwerty'
        );

        $this->registerUserUseCase->registerUser($command);
    }
}
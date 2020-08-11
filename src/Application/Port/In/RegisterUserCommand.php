<?php

declare(strict_types=1);

namespace Hexagonal\Application\Port\In;

class RegisterUserCommand
{
    /** @var string */
    protected string $email;

    /** @var string */
    protected string $password;

    /**
     * RegisterUserCommand constructor.
     *
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email    = $email;
        $this->password = $password;
    }
}
<?php

namespace Mannion007\Interfaces\CommandHandler;

use Mannion007\Interfaces\Command\CommandInterface;

interface CommandHandlerInterface
{
    public function handle(CommandInterface $command): void;
}

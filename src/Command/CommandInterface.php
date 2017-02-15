<?php

namespace Mannion007\Interfaces\Command;

interface CommandInterface
{
    public function getName(): string;
    public function getPayload(): array;
}

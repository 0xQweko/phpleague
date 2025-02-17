<?php

declare(strict_types=1);

namespace League\Config\Exception;

use Throwable;

final class UnknownOptionException extends \InvalidArgumentException implements ConfigurationExceptionInterface
{
    private string $path;

    public function __construct(string $message, string $path, int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->path = $path;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}
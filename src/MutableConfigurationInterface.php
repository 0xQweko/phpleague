<?php

declare(strict_types=1);

namespace League\Config;

use League\Config\Exception\UnknownOptionException;

/**
 * Interface for setting/merging user-defined configuration values into the configuration object
 */
interface MutableConfigurationInterface
{
    /**
     * @param mixed $value
     * 
     * @throws UnknownOptionException if $key contains a nested path which doesn't point to an array value
     */
    public function set(string $key, $value): void;

    /**
     * @param array<string, mixed> $config
     */
    public function merge(array $config = []): void;
}
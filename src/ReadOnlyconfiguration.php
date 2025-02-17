<?php

declare(strict_types=1);

namespace League\Config;

/**
 * Provides read-only access to a given Configuration object
 */
final class ReadOnlyConfiguration implements ConfigurationInterface
{
    private Configuration $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    /**
     * {@inheritDoc}
     */
    public function get(string $key)
    {
        return $this->config->get($key);
    }

    public function exists(string $key): bool
    {
        return $this->config->exists($key);
    }
}
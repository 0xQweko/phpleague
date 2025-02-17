<?php

declare(strict_types=1);

namespace League\Config;
/**
 * Interface for a service which provides a readable configuration object
 */
interface ConfigurationProviderInterface
{
    public function getConfiguration(): ConfigurationInterface;
}
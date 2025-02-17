<?php
declare(strict_types=1);

namespace League\Config;

/**
 * Implement this class to facilitate setter injection of the configuration where needed
 */
interface ConfigurationAwareInterface
{
    public function setConfiguration(ConfigurationInterface $configuration): void;
}
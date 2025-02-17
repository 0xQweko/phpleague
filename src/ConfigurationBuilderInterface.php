<?php

declare(strict_types=1);

namespace League\Config;

/**
 * An interface that provides the ability to set both the schema and configuration values
 */
interface ConfigurationBuilderInterface extends MutableConfigurationInterface, SchemaBuilderInterface
{
}
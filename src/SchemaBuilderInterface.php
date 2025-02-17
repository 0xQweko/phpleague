<?php

declare(strict_types=1);

namespace League\Config;

use Nette\Schema\Schema;

/**
 * Interface that allows new schemas to be added to a configuration
 */
interface SchemaBuilderInterface
{
    /**
     * Registers a new configuration schema at the given top-level key
     */
    public function addSchema(string $key, Schema $schema): void;
}
<?php

declare(strict_types=1);

namespace League\Config\Exception;

use Nette\Schema\ValidationException as NetteException;

final class ValidatinException extends InvalidConfigurationException
{
    /** @var string[] */
    private array $messages;

    public function __construct(NetteException $innerException)
    {
        parent::__construct($innerException->getMessage(), (int) $innerException->getCode(), $innerException);
        $this->messages = $innerException->getMessages();
    }

    /**
     * @return string[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}
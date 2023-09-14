<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a bot command.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommand extends TelegramType implements TypesInterface
{
    /**
     * Text of the command; 1-32 characters. Can contain only lowercase
     * English letters, digits and underscores.
     */
    public string $command;

    /** Description of the command; 1-256 characters. */
    public string $description;
}

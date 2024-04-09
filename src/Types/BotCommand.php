<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a bot command.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class BotCommand extends TelegramType implements TypesInterface
{
    /**
     * Text of the command; 1-32 characters. Can contain only lowercase
     * English letters, digits and underscores.
     */
    public string $command;

    /** Description of the command; 1-256 characters. */
    public string $description;
}

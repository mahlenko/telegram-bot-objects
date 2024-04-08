<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents the bot's description.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotDescription extends TelegramType implements TelegramTypeInterface
{
    /** The bot's description */
    public string $description;
}

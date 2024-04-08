<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * Represents the default scope of bot commands. Default commands are
 * used if no commands with a narrower scope are specified for the user.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeDefault extends TelegramType implements TelegramTypeInterface
{
    /** Scope type, must be default */
    public string $type;
}

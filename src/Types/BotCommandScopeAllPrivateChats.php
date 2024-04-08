<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * Represents the scope of bot commands, covering all private chats.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeAllPrivateChats extends TelegramType implements TelegramTypeInterface
{
    /** Scope type, must be all_private_chats */
    public string $type;
}

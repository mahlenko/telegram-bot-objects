<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * Represents the scope of bot commands, covering all group and
 * supergroup chats.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeAllGroupChats extends TelegramType implements TelegramTypeInterface
{
    /** Scope type, must be all_group_chats */
    public string $type;
}

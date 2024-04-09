<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands,
 * covering all group and supergroup chats.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class BotCommandScopeAllGroupChats extends TelegramType implements TypesInterface
{
    /** Scope type, must be all_group_chats */
    public string $type;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands,
 * covering a specific member of a group or supergroup chat.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class BotCommandScopeChatMember extends TelegramType implements TypesInterface
{
    /** Scope type, must be chat_member */
    public string $type;

    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;
}

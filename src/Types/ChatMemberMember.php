<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents a <a href="#chatmember">chat member</a> that has no
 * additional privileges or restrictions.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ChatMemberMember extends TelegramType implements TypesInterface
{
    /** The member's status in the chat, always “member” */
    public string $status;

    /** Information about the user */
    public User $user;
}

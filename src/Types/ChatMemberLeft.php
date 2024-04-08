<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a chat member that isn't currently a member of the chat,
 * but may join it themselves.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatMemberLeft extends TelegramType implements TelegramTypeInterface
{
    /** The member's status in the chat, always “left” */
    public string $status;

    /** Information about the user */
    public User $user;
}

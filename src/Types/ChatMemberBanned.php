<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents a chat member that was banned in the chat and can't return
 * to the chat or view chat messages.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatMemberBanned extends TelegramType implements TypesInterface
{
    /** The member's status in the chat, always “kicked” */
    public string $status;

    /** Information about the user */
    public User $user;

    /**
     * Date when restrictions will be lifted for this user; Unix time. If 0,
     * then the user is banned forever
     */
    public int $until_date;
}

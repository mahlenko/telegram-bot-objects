<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents a chat member that owns the chat and has all administrator
 * privileges.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatMemberOwner extends TelegramType implements TypesInterface
{
    /** The member's status in the chat, always “creator” */
    public string $status;

    /** Information about the user */
    public User $user;

    /** True, if the user's presence in the chat is hidden */
    public bool $is_anonymous;

    /** Optional. Custom title for this user */
    public ?string $custom_title;
}

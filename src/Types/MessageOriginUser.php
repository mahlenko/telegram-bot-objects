<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * The message was originally sent by a known user.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MessageOriginUser extends TelegramType implements TelegramTypeInterface
{
    /** Type of the message origin, always “user” */
    public string $type;

    /** Date the message was sent originally in Unix time */
    public int $date;

    /** User that sent the message originally */
    public User $sender_user;
}

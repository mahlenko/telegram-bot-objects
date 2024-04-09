<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * The message was originally sent by a known user.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class MessageOriginUser extends TelegramType implements TypesInterface
{
    /** Type of the message origin, always “user” */
    public string $type;

    /** Date the message was sent originally in Unix time */
    public int $date;

    /** User that sent the message originally */
    public User $sender_user;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * The message was originally sent by an unknown user.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MessageOriginHiddenUser extends TelegramType implements TelegramTypeInterface
{
    /** Type of the message origin, always “hidden_user” */
    public string $type;

    /** Date the message was sent originally in Unix time */
    public int $date;

    /** Name of the user that sent the message originally */
    public string $sender_user_name;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * The message was originally sent by an unknown user.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class MessageOriginHiddenUser extends TelegramType implements TypesInterface
{
    /** Type of the message origin, always “hidden_user” */
    public string $type;

    /** Date the message was sent originally in Unix time */
    public int $date;

    /** Name of the user that sent the message originally */
    public string $sender_user_name;
}

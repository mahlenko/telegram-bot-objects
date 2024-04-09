<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about a change in auto-delete
 * timer settings.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class MessageAutoDeleteTimerChanged extends TelegramType implements TypesInterface
{
    /** New auto-delete time for messages in the chat; in seconds */
    public int $message_auto_delete_time;
}

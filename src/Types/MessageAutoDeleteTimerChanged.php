<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about a change in auto-delete
 * timer settings.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MessageAutoDeleteTimerChanged extends TelegramType implements TypesInterface
{
    /** New auto-delete time for messages in the chat; in seconds */
    public int $message_auto_delete_time;
}

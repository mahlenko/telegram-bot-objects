<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object describes a message that was deleted or is otherwise
 * inaccessible to the bot.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InaccessibleMessage extends TelegramType implements TypesInterface
{
    /** Chat the message belonged to */
    public Chat $chat;

    /** Unique message identifier inside the chat */
    public int $message_id;

    /**
     * Always 0. The field can be used to differentiate regular and
     * inaccessible messages.
     */
    public int $date;
}

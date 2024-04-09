<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * The message was originally sent to a channel chat.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class MessageOriginChannel extends TelegramType implements TypesInterface
{
    /** Type of the message origin, always “channel” */
    public string $type;

    /** Date the message was sent originally in Unix time */
    public int $date;

    /** Channel chat to which the message was originally sent */
    public Chat $chat;

    /** Unique message identifier inside the chat */
    public int $message_id;

    /** Optional. Signature of the original post author */
    public ?string $author_signature;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MessageOriginChat extends TelegramType implements TypesInterface
{
    /** Type of the message origin, always “chat” */
    public string $type;

    /** Date the message was sent originally in Unix time */
    public int $date;

    /** Chat that sent the message originally */
    public Chat $sender_chat;

    /**
     * Optional. For messages originally sent by an anonymous chat
     * administrator, original message author signature
     */
    public ?string $author_signature;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object is received when messages are deleted from a connected
 * business account.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BusinessMessagesDeleted extends TelegramType implements TypesInterface
{
    /** Unique identifier of the business connection */
    public string $business_connection_id;

    /**
     * Information about a chat in the business account. The bot may not have
     * access to the chat or the corresponding user.
     */
    public Chat $chat;

    /**
     * A JSON-serialized list of identifiers of deleted messages in the chat
     * of the business account
     *
     * @var array<int>
     */
    public array $message_ids;
}

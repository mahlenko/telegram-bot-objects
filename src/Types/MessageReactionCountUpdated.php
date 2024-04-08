<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents reaction changes on a message with anonymous
 * reactions.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MessageReactionCountUpdated extends TelegramType implements TelegramTypeInterface
{
    /** The chat containing the message */
    public Chat $chat;

    /** Unique message identifier inside the chat */
    public int $message_id;

    /** Date of the change in Unix time */
    public int $date;

    /**
     * List of reactions that are present on the message
     *
     * @var array<ReactionCount>
     */
    public array $reactions;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * The boost was obtained by the creation of a Telegram Premium giveaway.
 * This boosts the chat 4 times for the duration of the corresponding
 * Telegram Premium subscription.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatBoostSourceGiveaway extends TelegramType implements TelegramTypeInterface
{
    /** Source of the boost, always “giveaway” */
    public string $source;

    /**
     * Identifier of a message in the chat with the giveaway; the message
     * could have been deleted already. May be 0 if the message isn't sent
     * yet.
     */
    public int $giveaway_message_id;

    /** Optional. User that won the prize in the giveaway if any */
    public ?User $user;

    /**
     * Optional. True, if the giveaway was completed, but there was no user
     * to win the prize
     */
    public ?bool $is_unclaimed;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about the completion of a
 * giveaway without public winners.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GiveawayCompleted extends TelegramType implements TelegramTypeInterface
{
    /** Number of winners in the giveaway */
    public int $winner_count;

    /** Optional. Number of undistributed prizes */
    public ?int $unclaimed_prize_count;

    /**
     * Optional. Message with the giveaway that was completed, if it wasn't
     * deleted
     */
    public ?Message $giveaway_message;
}

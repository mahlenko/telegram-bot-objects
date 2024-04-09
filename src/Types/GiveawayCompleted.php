<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about the completion of a
 * giveaway without public winners.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GiveawayCompleted extends TelegramType implements TypesInterface
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

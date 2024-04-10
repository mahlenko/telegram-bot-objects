<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * GiveawayCompleted
 *
 * This object represents a service message about the completion of a giveaway without public winners.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GiveawayCompleted implements TelegramTypeInterface
{
    public function __construct(
        /** Number of winners in the giveaway */
        public int $winner_count,
        /** Number of undistributed prizes */
        public ?int $unclaimed_prize_count,
        /** Message with the giveaway that was completed, if it wasn't deleted */
        public ?Message $giveaway_message,
    ) {
    }
}

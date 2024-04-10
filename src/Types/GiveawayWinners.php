<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * GiveawayWinners
 *
 * This object represents a message about the completion of a giveaway with public
 * winners.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GiveawayWinners implements TelegramTypeInterface
{
    public function __construct(
        /** The chat that created the giveaway */
        public Chat $chat,
        /** Identifier of the message with the giveaway in the chat */
        public int $giveaway_message_id,
        /**
         * Point in time (Unix timestamp) when winners of the giveaway were
         * selected
         */
        public int $winners_selection_date,
        /** Total number of winners in the giveaway */
        public int $winner_count,
        /**
         * List of up to 100 winners of the giveaway
         * @var array<User>
         */
        public array $winners,
        /**
         * The number of other chats the user had to join in order to be eligible
         * for the giveaway
         */
        public ?int $additional_chat_count,
        /**
         * The number of months the Telegram Premium subscription won from the
         * giveaway will be active for
         */
        public ?int $premium_subscription_month_count,
        /** Number of undistributed prizes */
        public ?int $unclaimed_prize_count,
        /**
         * True, if only users who had joined the chats after the giveaway
         * started were eligible to win
         */
        public ?true $only_new_members,
        /**
         * True, if the giveaway was canceled because the payment for it was
         * refunded
         */
        public ?true $was_refunded,
        /** Description of additional giveaway prize */
        public ?string $prize_description,
    ) {
    }
}

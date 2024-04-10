<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * PollAnswer
 *
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class PollAnswer implements TelegramTypeInterface
{
    public function __construct(
        /** Unique poll identifier */
        public string $poll_id,
        /** The chat that changed the answer to the poll, if the voter is anonymous */
        public ?Chat $voter_chat,
        /** The user that changed the answer to the poll, if the voter isn't anonymous */
        public ?User $user,
        /**
         * 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
         * @var array<int>
         */
        public array $option_ids,
    ) {
    }
}

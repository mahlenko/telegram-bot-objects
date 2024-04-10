<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * MessageReactionUpdated
 *
 * This object represents a change of a reaction on a message performed by a user.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class MessageReactionUpdated implements TelegramTypeInterface
{
    public function __construct(
        /** The chat containing the message the user reacted to */
        public Chat $chat,
        /** Unique identifier of the message inside the chat */
        public int $message_id,
        /** The user that changed the reaction, if the user isn't anonymous */
        public ?User $user,
        /** The chat on behalf of which the reaction was changed, if the user is anonymous */
        public ?Chat $actor_chat,
        /** Date of the change in Unix time */
        public int $date,
        /**
         * Previous list of reaction types that were set by the user
         * @var array<ReactionType>
         */
        public array $old_reaction,
        /**
         * New list of reaction types that have been set by the user
         * @var array<ReactionType>
         */
        public array $new_reaction,
    ) {
    }
}

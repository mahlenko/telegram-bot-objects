<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatJoinRequest
 *
 * Represents a join request sent to a chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatJoinRequest implements TelegramTypeInterface
{
    public function __construct(
        /** Chat to which the request was sent */
        public Chat $chat,
        /** User that sent the join request */
        public User $from,
        /**
         * Identifier of a private chat with the user who sent the join request. This
         * number may have more than 32 significant bits and some programming languages may
         * have difficulty/silent defects in interpreting it. But it has at most 52
         * significant bits, so a 64-bit integer or double-precision float type are safe
         * for storing this identifier. The bot can use this identifier for 5 minutes to
         * send messages until the join request is processed, assuming no other
         * administrator contacted the user.
         */
        public int $user_chat_id,
        /** Date the request was sent in Unix time */
        public int $date,
        /** Bio of the user. */
        public ?string $bio,
        /** Chat invite link that was used by the user to send the join request */
        public ?ChatInviteLink $invite_link,
    ) {
    }
}

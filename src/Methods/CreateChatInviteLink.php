<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ChatInviteLink;

/**
 * CreateChatInviteLink
 *
 * Use this method to create an additional invite link for a chat. The bot must be
 * an administrator in the chat for this to work and must have the appropriate
 * administrator rights. The link can be revoked using the method
 * revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class CreateChatInviteLink implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = ChatInviteLink::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         */
        public int|string|null $chat_id,
        /** Invite link name; 0-32 characters */
        public string $name,
        /** Point in time (Unix timestamp) when the link will expire */
        public int $expire_date,
        /**
         * The maximum number of users that can be members of the chat simultaneously after
         * joining the chat via this invite link; 1-99999
         */
        public int $member_limit,
        /**
         * True, if users joining the chat via the link need to be approved by chat
         * administrators. If True, member_limit can't be specified
         */
        public bool $creates_join_request,
    ) {
    }
}

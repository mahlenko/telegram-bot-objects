<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * ApproveChatJoinRequest
 *
 * Use this method to approve a chat join request. The bot must be an administrator
 * in the chat for this to work and must have the can_invite_users administrator
 * right. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ApproveChatJoinRequest implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         */
        public int|string|null $chat_id,
        /** Unique identifier of the target user */
        public ?int $user_id,
    ) {
    }
}

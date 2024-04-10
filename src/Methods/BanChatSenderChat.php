<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * BanChatSenderChat
 *
 * Use this method to ban a channel chat in a supergroup or a channel. Until the
 * chat is unbanned, the owner of the banned chat won't be able to send messages on
 * behalf of any of their channels. The bot must be an administrator in the
 * supergroup or channel for this to work and must have the appropriate
 * administrator rights. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BanChatSenderChat implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * channel (in the format @channelusername)
         */
        public int|string $chat_id,
        /** Unique identifier of the target sender chat */
        public int $sender_chat_id,
    ) {
    }
}

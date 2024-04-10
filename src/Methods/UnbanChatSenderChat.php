<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * UnbanChatSenderChat
 *
 * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class UnbanChatSenderChat implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
        public int|string|null $chat_id,
        /** Unique identifier of the target sender chat */
        public ?int $sender_chat_id,
    ) {
    }
}

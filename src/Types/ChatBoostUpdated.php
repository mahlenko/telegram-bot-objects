<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatBoostUpdated
 *
 * This object represents a boost added to a chat or changed.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatBoostUpdated implements TelegramTypeInterface
{
    public function __construct(
        /** Chat which was boosted */
        public Chat $chat,
        /** Information about the chat boost */
        public ChatBoost $boost,
    ) {
    }
}

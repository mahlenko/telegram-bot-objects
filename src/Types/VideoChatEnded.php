<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * VideoChatEnded
 *
 * This object represents a service message about a video chat ended in the chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class VideoChatEnded implements TelegramTypeInterface
{
    public function __construct(
        /** Video chat duration in seconds */
        public int $duration,
    ) {
    }
}

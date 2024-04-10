<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * VideoChatScheduled
 *
 * This object represents a service message about a video chat scheduled in the chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class VideoChatScheduled implements TelegramTypeInterface
{
    public function __construct(
        /** Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator */
        public int $start_date,
    ) {
    }
}

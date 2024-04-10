<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * MessageAutoDeleteTimerChanged
 *
 * This object represents a service message about a change in auto-delete timer
 * settings.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class MessageAutoDeleteTimerChanged implements TelegramTypeInterface
{
    public function __construct(
        /** New auto-delete time for messages in the chat; in seconds */
        public int $message_auto_delete_time,
    ) {
    }
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * MessageId
 *
 * This object represents a unique message identifier.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class MessageId implements TelegramTypeInterface
{
    public function __construct(
        /** Unique message identifier */
        public int $message_id,
    ) {
    }
}

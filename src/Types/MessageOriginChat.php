<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * MessageOriginChat
 *
 * The message was originally sent on behalf of a chat to a group chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class MessageOriginChat implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the message origin, always “chat” */
        public string $type,
        /** Date the message was sent originally in Unix time */
        public int $date,
        /** Chat that sent the message originally */
        public Chat $sender_chat,
        /** For messages originally sent by an anonymous chat administrator, original message author signature */
        public ?string $author_signature,
    ) {
    }
}

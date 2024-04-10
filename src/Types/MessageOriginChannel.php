<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * MessageOriginChannel
 *
 * The message was originally sent to a channel chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class MessageOriginChannel implements TelegramTypeInterface
{
	public function __construct(
		/** Type of the message origin, always “channel” */
		public string $type,
		/** Date the message was sent originally in Unix time */
		public int $date,
		/** Channel chat to which the message was originally sent */
		public Chat $chat,
		/** Unique message identifier inside the chat */
		public int $message_id,
		/** Signature of the original post author */
		public ?string $author_signature,
	) {
	}
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * MessageReactionCountUpdated
 *
 * This object represents reaction changes on a message with anonymous reactions.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class MessageReactionCountUpdated implements TelegramTypeInterface
{
	public function __construct(
		/** The chat containing the message */
		public Chat $chat,
		/** Unique message identifier inside the chat */
		public int $message_id,
		/** Date of the change in Unix time */
		public int $date,
		/**
		 * List of reactions that are present on the message
		 * @var array<ReactionCount>
		 */
		public array $reactions,
	) {
	}
}

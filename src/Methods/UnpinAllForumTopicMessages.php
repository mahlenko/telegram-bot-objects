<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * UnpinAllForumTopicMessages
 *
 * Use this method to clear the list of pinned messages in a forum topic. The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class UnpinAllForumTopicMessages implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = 'true';

	public function __construct(
		/** Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername) */
		public int|string $chat_id,
		/** Unique identifier for the target message thread of the forum topic */
		public int $message_thread_id,
	) {
	}
}

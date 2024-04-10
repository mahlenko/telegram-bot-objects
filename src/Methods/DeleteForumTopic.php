<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * DeleteForumTopic
 *
 * Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_delete_messages administrator rights. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class DeleteForumTopic implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = 'true';

	public function __construct(
		/** Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername) */
		public int|string|null $chat_id,
		/** Unique identifier for the target message thread of the forum topic */
		public ?int $message_thread_id,
	) {
	}
}

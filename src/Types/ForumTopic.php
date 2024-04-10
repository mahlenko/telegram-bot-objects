<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ForumTopic
 *
 * This object represents a forum topic.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ForumTopic implements TelegramTypeInterface
{
	public function __construct(
		/** Unique identifier of the forum topic */
		public ?int $message_thread_id,
		/** Name of the topic */
		public ?string $name,
		/** Color of the topic icon in RGB format */
		public ?int $icon_color,
		/** Unique identifier of the custom emoji shown as the topic icon */
		public string $icon_custom_emoji_id,
	) {
	}
}

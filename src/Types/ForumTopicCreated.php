<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ForumTopicCreated
 *
 * This object represents a service message about a new forum topic created in the chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ForumTopicCreated implements TelegramTypeInterface
{
	public function __construct(
		/** Name of the topic */
		public string $name,
		/** Color of the topic icon in RGB format */
		public int $icon_color,
		/** Unique identifier of the custom emoji shown as the topic icon */
		public ?string $icon_custom_emoji_id,
	) {
	}
}

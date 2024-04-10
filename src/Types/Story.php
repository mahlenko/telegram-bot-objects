<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * Story
 *
 * This object represents a story.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class Story implements TelegramTypeInterface
{
	public function __construct(
		/** Chat that posted the story */
		public Chat $chat,
		/** Unique identifier for the story in the chat */
		public int $id,
	) {
	}
}

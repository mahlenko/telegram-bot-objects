<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatBoostAdded
 *
 * This object represents a service message about a user boosting a chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatBoostAdded implements TelegramTypeInterface
{
	public function __construct(
		/** Number of boosts added by the user */
		public ?int $boost_count,
	) {
	}
}

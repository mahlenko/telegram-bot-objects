<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatBoost
 *
 * This object contains information about a chat boost.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatBoost implements TelegramTypeInterface
{
	public function __construct(
		/** Unique identifier of the boost */
		public ?string $boost_id,
		/** Point in time (Unix timestamp) when the chat was boosted */
		public ?int $add_date,
		/** Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged */
		public ?int $expiration_date,
		/** Source of the added boost */
		public ?ChatBoostSource $source,
	) {
	}
}

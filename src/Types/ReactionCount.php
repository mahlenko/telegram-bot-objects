<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ReactionCount
 *
 * Represents a reaction added to a message along with the number of times it was added.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ReactionCount implements TelegramTypeInterface
{
	public function __construct(
		/** Type of the reaction */
		public ?ReactionType $type,
		/** Number of times the reaction was added */
		public ?int $total_count,
	) {
	}
}

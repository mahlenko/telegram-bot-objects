<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * PollOption
 *
 * This object contains information about one answer option in a poll.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class PollOption implements TelegramTypeInterface
{
	public function __construct(
		/** Option text, 1-100 characters */
		public string $text,
		/** Number of users that voted for this option */
		public int $voter_count,
	) {
	}
}

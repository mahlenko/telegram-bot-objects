<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * GameHighScore
 *
 * This object represents one row of the high scores table for a game.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GameHighScore implements TelegramTypeInterface
{
	public function __construct(
		/** Position in high score table for the game */
		public int $position,
		/** User */
		public User $user,
		/** Score */
		public int $score,
	) {
	}
}

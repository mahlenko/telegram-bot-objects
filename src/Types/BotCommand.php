<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BotCommand
 *
 * This object represents a bot command.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BotCommand implements TelegramTypeInterface
{
	public function __construct(
		/** Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores. */
		public string $command,
		/** Description of the command; 1-256 characters. */
		public string $description,
	) {
	}
}

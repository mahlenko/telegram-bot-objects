<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * MenuButtonCommands
 *
 * Represents a menu button, which opens the bot's list of commands.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class MenuButtonCommands implements TelegramTypeInterface
{
	public function __construct(
		/** Type of the button, must be commands */
		public ?string $type,
	) {
	}
}

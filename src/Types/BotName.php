<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BotName
 *
 * This object represents the bot's name.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BotName implements TelegramTypeInterface
{
	public function __construct(
		/** The bot's name */
		public ?string $name,
	) {
	}
}

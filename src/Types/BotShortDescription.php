<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BotShortDescription
 *
 * This object represents the bot's short description.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BotShortDescription implements TelegramTypeInterface
{
	public function __construct(
		/** The bot's short description */
		public ?string $short_description,
	) {
	}
}

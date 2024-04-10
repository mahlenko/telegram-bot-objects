<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * MenuButtonDefault
 *
 * Describes that no specific value for the menu button was set.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class MenuButtonDefault implements TelegramTypeInterface
{
	public function __construct(
		/** Type of the button, must be default */
		public ?string $type,
	) {
	}
}

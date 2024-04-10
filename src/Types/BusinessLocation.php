<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BusinessLocation
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BusinessLocation implements TelegramTypeInterface
{
	public function __construct(
		/** Address of the business */
		public string $address,
		/** Location of the business */
		public ?Location $location,
	) {
	}
}

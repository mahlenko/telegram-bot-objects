<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * OrderInfo
 *
 * This object represents information about an order.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class OrderInfo implements TelegramTypeInterface
{
	public function __construct(
		/** User name */
		public ?string $name,
		/** User's phone number */
		public ?string $phone_number,
		/** User email */
		public ?string $email,
		/** User shipping address */
		public ?ShippingAddress $shipping_address,
	) {
	}
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * PreCheckoutQuery
 *
 * This object contains information about an incoming pre-checkout query.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class PreCheckoutQuery implements TelegramTypeInterface
{
	public function __construct(
		/** Unique query identifier */
		public string $id,
		/** User who sent the query */
		public User $from,
		/** Three-letter ISO 4217 currency code */
		public string $currency,
		/** Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
		public int $total_amount,
		/** Bot specified invoice payload */
		public string $invoice_payload,
		/** Identifier of the shipping option chosen by the user */
		public ?string $shipping_option_id,
		/** Order information provided by the user */
		public ?OrderInfo $order_info,
	) {
	}
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * Invoice
 *
 * This object contains basic information about an invoice.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class Invoice implements TelegramTypeInterface
{
    public function __construct(
        /** Product name */
        public string $title,
        /** Product description */
        public string $description,
        /** Unique bot deep-linking parameter that can be used to generate this invoice */
        public string $start_parameter,
        /** Three-letter ISO 4217 currency code */
        public string $currency,
        /** Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
        public int $total_amount,
    ) {
    }
}

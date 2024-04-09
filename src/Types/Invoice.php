<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramType;

/**
 * This object contains basic information about an invoice.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class Invoice extends TelegramType implements PaymentsInterface
{
    /** Product name */
    public string $title;

    /** Product description */
    public string $description;

    /**
     * Unique bot deep-linking parameter that can be used to generate this
     * invoice
     */
    public string $start_parameter;

    /** Three-letter ISO 4217 currency code */
    public string $currency;

    /**
     * Total price in the smallest units of the currency (integer, not
     * float/double). For example, for a price of US$ 1.45 pass amount = 145.
     * See the exp parameter in currencies.json, it shows the number of
     * digits past the decimal point for each currency (2 for the majority of
     * currencies).
     */
    public int $total_amount;
}

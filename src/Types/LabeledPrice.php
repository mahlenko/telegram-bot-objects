<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a portion of the price for goods or services.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class LabeledPrice extends TelegramType implements PaymentsInterface
{
    /** Portion label */
    public string $label;

    /**
     * Price of the product in the smallest units of the currency (integer,
     * not float/double). For example, for a price of US$ 1.45 pass amount =
     * 145. See the exp parameter in currencies.json, it shows the number of
     * digits past the decimal point for each currency (2 for the majority of
     * currencies).
     */
    public int $amount;
}

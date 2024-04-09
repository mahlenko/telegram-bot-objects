<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a shipping address.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ShippingAddress extends TelegramType implements PaymentsInterface
{
    /** Two-letter ISO 3166-1 alpha-2 country code */
    public string $country_code;

    /** State, if applicable */
    public string $state;

    /** City */
    public string $city;

    /** First line for the address */
    public string $street_line1;

    /** Second line for the address */
    public string $street_line2;

    /** Address post code */
    public string $post_code;
}

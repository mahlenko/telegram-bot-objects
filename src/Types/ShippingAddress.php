<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ShippingAddress
 *
 * This object represents a shipping address.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ShippingAddress implements TelegramTypeInterface
{
    public function __construct(
        /** Two-letter ISO 3166-1 alpha-2 country code */
        public string $country_code,
        /** State, if applicable */
        public string $state,
        /** City */
        public string $city,
        /** First line for the address */
        public string $street_line1,
        /** Second line for the address */
        public string $street_line2,
        /** Address post code */
        public string $post_code,
    ) {
    }
}

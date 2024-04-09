<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramType;

/**
 * This object represents information about an order.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class OrderInfo extends TelegramType implements PaymentsInterface
{
    /** Optional. User name */
    public ?string $name;

    /** Optional. User's phone number */
    public ?string $phone_number;

    /** Optional. User email */
    public ?string $email;

    /** Optional. User shipping address */
    public ?ShippingAddress $shipping_address;
}

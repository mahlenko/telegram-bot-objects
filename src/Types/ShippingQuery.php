<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about an incoming shipping query.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ShippingQuery extends TelegramType implements PaymentsInterface
{
    /** Unique query identifier */
    public string $id;

    /** User who sent the query */
    public User $from;

    /** Bot specified invoice payload */
    public string $invoice_payload;

    /** User specified shipping address */
    public ShippingAddress $shipping_address;
}

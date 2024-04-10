<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ShippingQuery
 *
 * This object contains information about an incoming shipping query.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ShippingQuery implements TelegramTypeInterface
{
    public function __construct(
        /** Unique query identifier */
        public string $id,
        /** User who sent the query */
        public User $from,
        /** Bot specified invoice payload */
        public string $invoice_payload,
        /** User specified shipping address */
        public ShippingAddress $shipping_address,
    ) {
    }
}

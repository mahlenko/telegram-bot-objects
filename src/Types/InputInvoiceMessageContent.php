<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\InlineModeInterface;

/**
 * Represents the content of an invoice message to be sent as the result
 * of an inline query.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputInvoiceMessageContent extends BaseType implements InlineModeInterface
{
    /** Product name, 1-32 characters */
    public string $title;

    /** Product description, 1-255 characters */
    public string $description;

    /**
     * Bot-defined invoice payload, 1-128 bytes. This will not be displayed
     * to the user, use for your internal processes.
     */
    public string $payload;

    /** Payment provider token, obtained via @BotFather */
    public string $provider_token;

    /** Three-letter ISO 4217 currency code, see more on currencies */
    public string $currency;

    /**
     * Price breakdown, a JSON-serialized list of components (e.g. product
     * price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     */
    public array $prices;

    /**
     * Optional. The maximum accepted amount for tips in the smallest units
     * of the currency (integer, not float/double). For example, for a
     * maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp
     * parameter in currencies.json, it shows the number of digits past the
     * decimal point for each currency (2 for the majority of currencies).
     * Defaults to 0
     */
    public ?int $max_tip_amount;

    /**
     * Optional. A JSON-serialized array of suggested amounts of tip in the
     * smallest units of the currency (integer, not float/double). At most 4
     * suggested tip amounts can be specified. The suggested tip amounts must
     * be positive, passed in a strictly increased order and must not exceed
     * max_tip_amount.
     */
    public ?array $suggested_tip_amounts;

    /**
     * Optional. A JSON-serialized object for data about the invoice, which
     * will be shared with the payment provider. A detailed description of
     * the required fields should be provided by the payment provider.
     */
    public ?string $provider_data;

    /**
     * Optional. URL of the product photo for the invoice. Can be a photo of
     * the goods or a marketing image for a service.
     */
    public ?string $photo_url;

    /** Optional. Photo size in bytes */
    public ?int $photo_size;

    /** Optional. Photo width */
    public ?int $photo_width;

    /** Optional. Photo height */
    public ?int $photo_height;

    /**
     * Optional. Pass True if you require the user's full name to complete
     * the order
     */
    public ?bool $need_name;

    /**
     * Optional. Pass True if you require the user's phone number to complete
     * the order
     */
    public ?bool $need_phone_number;

    /**
     * Optional. Pass True if you require the user's email address to
     * complete the order
     */
    public ?bool $need_email;

    /**
     * Optional. Pass True if you require the user's shipping address to
     * complete the order
     */
    public ?bool $need_shipping_address;

    /**
     * Optional. Pass True if the user's phone number should be sent to
     * provider
     */
    public ?bool $send_phone_number_to_provider;

    /**
     * Optional. Pass True if the user's email address should be sent to
     * provider
     */
    public ?bool $send_email_to_provider;

    /** Optional. Pass True if the final price depends on the shipping method */
    public ?bool $is_flexible;
}

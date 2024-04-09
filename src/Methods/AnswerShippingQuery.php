<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ShippingOption;

/**
 * If you sent an invoice requesting a shipping address and the parameter
 * <em>is_flexible</em> was specified, the Bot API will send an <a
 * href="#update">Update</a> with a <em>shipping_query</em> field to the
 * bot. Use this method to reply to shipping queries. On success,
 * <em>True</em> is returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class AnswerShippingQuery extends TelegramMethod implements PaymentsInterface
{
    /** Unique identifier for the query to be answered */
    public string $shipping_query_id;

    /**
     * Pass True if delivery to the specified address is possible and False
     * if there are any problems (for example, if delivery to the specified
     * address is not possible)
     */
    public bool $ok;

    /**
     * Required if ok is True. A JSON-serialized array of available shipping
     * options.
     *
     * @var array<ShippingOption>
     */
    public ?array $shipping_options;

    /**
     * Required if ok is False. Error message in human readable form that
     * explains why it is impossible to complete the order (e.g. "Sorry,
     * delivery to your desired address is unavailable'). Telegram will
     * display this message to the user.
     */
    public ?string $error_message;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['shipping_query_id', 'ok'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

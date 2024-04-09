<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\BusinessConnection;

/**
 * Use this method to get information about the connection of the bot
 * with a business account. Returns a <a
 * href="#businessconnection">BusinessConnection</a> object on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetBusinessConnection extends TelegramMethod implements MethodsInterface
{
    /** Unique identifier of the business connection */
    public string $business_connection_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['business_connection_id'];

    /** Response mapping type. */
    public string $response_type = BusinessConnection::class;
}

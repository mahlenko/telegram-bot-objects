<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to get information about the connection of the bot
 * with a business account. Returns a BusinessConnection object on
 * success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetBusinessConnection extends TelegramMethod implements MethodsInterface
{
    /** Unique identifier of the business connection */
    public string $business_connection_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['business_connection_id'];
}

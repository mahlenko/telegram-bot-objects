<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to close the bot instance before moving it from one
 * local server to another. You need to delete the webhook before calling
 * this method to ensure that the bot isn't launched again after server
 * restart. The method will return error 429 in the first 10 minutes
 * after the bot is launched. Returns True on success. Requires no
 * parameters.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Close extends TelegramMethod implements MethodsInterface
{
    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}

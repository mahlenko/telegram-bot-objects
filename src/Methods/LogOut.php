<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to log out from the cloud Bot API server before
 * launching the bot locally. You must log out the bot before running it
 * locally, otherwise there is no guarantee that the bot will receive
 * updates. After a successful call, you can immediately log in on a
 * local server, but will not be able to log in back to the cloud Bot API
 * server for 10 minutes. Returns True on success. Requires no
 * parameters.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class LogOut extends TelegramMethod implements MethodsInterface
{
    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}

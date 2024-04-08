<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to change the bot's name. Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetMyName extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * New bot name; 0-64 characters. Pass an empty string to remove the
     * dedicated name for the given language.
     */
    public ?string $name;

    /**
     * A two-letter ISO 639-1 language code. If empty, the name will be shown
     * to all users for whose language there is no dedicated name.
     */
    public ?string $language_code;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}

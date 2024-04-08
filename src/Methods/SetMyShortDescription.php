<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to change the bot's short description, which is shown
 * on the bot's profile page and is sent together with the link when
 * users share the bot. Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetMyShortDescription extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * New short description for the bot; 0-120 characters. Pass an empty
     * string to remove the dedicated short description for the given
     * language.
     */
    public ?string $short_description;

    /**
     * A two-letter ISO 639-1 language code. If empty, the short description
     * will be applied to all users for whose language there is no dedicated
     * short description.
     */
    public ?string $language_code;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}

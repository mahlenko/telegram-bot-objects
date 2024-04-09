<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to change the bot's short description, which is shown
 * on the bot's profile page and is sent together with the link when
 * users share the bot. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetMyShortDescription extends TelegramMethod implements MethodsInterface
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

    /** Response mapping type. */
    public string $response_type = 'bool';
}

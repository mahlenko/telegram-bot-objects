<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to change the bot's description, which is shown in the
 * chat with the bot if the chat is empty. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetMyDescription extends TelegramMethod implements MethodsInterface
{
    /**
     * New bot description; 0-512 characters. Pass an empty string to remove
     * the dedicated description for the given language.
     */
    public ?string $description;

    /**
     * A two-letter ISO 639-1 language code. If empty, the description will
     * be applied to all users for whose language there is no dedicated
     * description.
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

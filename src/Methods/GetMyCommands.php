<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\BotCommand;
use TelegramBot\Types\BotCommandScope;

/**
 * Use this method to get the current list of the bot's commands for the
 * given scope and user language. Returns an Array of <a
 * href="#botcommand">BotCommand</a> objects. If commands aren't set, an
 * empty list is returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetMyCommands extends TelegramMethod implements MethodsInterface
{
    /**
     * A JSON-serialized object, describing scope of users. Defaults to
     * BotCommandScopeDefault.
     */
    public ?BotCommandScope $scope;

    /** A two-letter ISO 639-1 language code or an empty string */
    public ?string $language_code;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];

    /** Response mapping type. */
    public string $response_type = BotCommand::class;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\BotCommandScope;

/**
 * Use this method to delete the list of the bot's commands for the given
 * scope and user language. After deletion, <a
 * href="#determining-list-of-commands">higher level commands</a> will be
 * shown to affected users. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class DeleteMyCommands extends TelegramMethod implements MethodsInterface
{
    /**
     * A JSON-serialized object, describing scope of users for which the
     * commands are relevant. Defaults to BotCommandScopeDefault.
     */
    public ?BotCommandScope $scope;

    /**
     * A two-letter ISO 639-1 language code. If empty, commands will be
     * applied to all users from the given scope, for whose language there
     * are no dedicated commands
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

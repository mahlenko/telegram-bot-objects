<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\BotCommand;
use TelegramBot\Types\BotCommandScope;

/**
 * Use this method to change the list of the bot's commands. See this
 * manual for more details about bot commands. Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetMyCommands extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * A JSON-serialized list of bot commands to be set as the list of the
     * bot's commands. At most 100 commands can be specified.
     *
     * @var array<BotCommand>
     */
    public array $commands;

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
    public array $required_properties = ['commands'];
}

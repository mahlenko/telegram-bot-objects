<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents the default <a href="#botcommandscope">scope</a> of bot
 * commands. Default commands are used if no commands with a <a
 * href="#determining-list-of-commands">narrower scope</a> are specified
 * for the user.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class BotCommandScopeDefault extends TelegramType implements TypesInterface
{
    /** Scope type, must be default */
    public string $type;
}

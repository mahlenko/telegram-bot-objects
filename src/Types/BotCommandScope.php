<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents the scope to which bot commands are applied.
 * Currently, the following 7 scopes are supported:
 *
 * BotCommandScopeDefault
 * BotCommandScopeAllPrivateChats
 * BotCommandScopeAllGroupChats
 * BotCommandScopeAllChatAdministrators
 * BotCommandScopeChat
 * BotCommandScopeChatAdministrators
 * BotCommandScopeChatMember
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScope extends TelegramType implements TelegramTypeInterface
{
}

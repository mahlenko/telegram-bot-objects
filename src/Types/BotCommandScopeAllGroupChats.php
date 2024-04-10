<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BotCommandScopeAllGroupChats
 *
 * Represents the scope of bot commands, covering all group and supergroup chats.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BotCommandScopeAllGroupChats implements TelegramTypeInterface
{
    public function __construct(
        /** Scope type, must be all_group_chats */
        public string $type,
    ) {
    }
}

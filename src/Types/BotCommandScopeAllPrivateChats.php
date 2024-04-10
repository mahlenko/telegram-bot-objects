<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BotCommandScopeAllPrivateChats
 *
 * Represents the scope of bot commands, covering all private chats.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BotCommandScopeAllPrivateChats implements TelegramTypeInterface
{
    public function __construct(
        /** Scope type, must be all_private_chats */
        public string $type,
    ) {
    }
}

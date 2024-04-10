<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BotCommandScopeChat
 *
 * Represents the scope of bot commands, covering a specific chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BotCommandScopeChat implements TelegramTypeInterface
{
    public function __construct(
        /** Scope type, must be chat */
        public string $type,
        /**
         * Unique identifier for the target chat or username of the target
         * supergroup (in the format @supergroupusername)
         */
        public int|string $chat_id,
    ) {
    }
}

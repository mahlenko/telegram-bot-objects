<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BotCommandScopeChatAdministrators
 *
 * Represents the scope of bot commands, covering all administrators of a specific
 * group or supergroup chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BotCommandScopeChatAdministrators implements TelegramTypeInterface
{
    public function __construct(
        /** Scope type, must be chat_administrators */
        public string $type,
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format @supergroupusername)
         */
        public int|string $chat_id,
    ) {
    }
}

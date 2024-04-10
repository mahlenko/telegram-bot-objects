<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BotCommandScopeChatMember
 *
 * Represents the scope of bot commands, covering a specific member of a group or
 * supergroup chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BotCommandScopeChatMember implements TelegramTypeInterface
{
    public function __construct(
        /** Scope type, must be chat_member */
        public string $type,
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format @supergroupusername)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
    ) {
    }
}

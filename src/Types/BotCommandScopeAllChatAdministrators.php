<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * BotCommandScopeAllChatAdministrators
 *
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class BotCommandScopeAllChatAdministrators implements TelegramTypeInterface
{
	public function __construct(
		/** Scope type, must be all_chat_administrators */
		public ?string $type,
	) {
	}
}

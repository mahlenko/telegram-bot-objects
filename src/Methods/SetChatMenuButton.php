<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\MenuButton;

/**
 * SetChatMenuButton
 *
 * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SetChatMenuButton implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = 'true';

	public function __construct(
		/** Unique identifier for the target private chat. If not specified, default bot's menu button will be changed */
		public ?int $chat_id,
		/** A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault */
		public ?MenuButton $menu_button,
	) {
	}
}

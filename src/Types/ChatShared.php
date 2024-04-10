<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatShared
 *
 * This object contains information about a chat that was shared with the bot using a KeyboardButtonRequestChat button.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatShared implements TelegramTypeInterface
{
	public function __construct(
		/** Identifier of the request */
		public ?int $request_id,
		/** Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means. */
		public ?int $chat_id,
		/** Title of the chat, if the title was requested by the bot. */
		public string $title,
		/** Username of the chat, if the username was requested by the bot and available. */
		public string $username,
		/**
		 * Available sizes of the chat photo, if the photo was requested by the bot
		 * @var array<PhotoSize>
		 */
		public array $photo,
	) {
	}
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * KeyboardButtonRequestChat
 *
 * This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the сhat if appropriate More about requesting chats »
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class KeyboardButtonRequestChat implements TelegramTypeInterface
{
	public function __construct(
		/** Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message */
		public ?int $request_id,
		/** Pass True to request a channel chat, pass False to request a group or a supergroup chat. */
		public ?bool $chat_is_channel,
		/** Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied. */
		public bool $chat_is_forum,
		/** Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied. */
		public bool $chat_has_username,
		/** Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied. */
		public bool $chat_is_created,
		/** A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied. */
		public ChatAdministratorRights $user_administrator_rights,
		/** A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied. */
		public ChatAdministratorRights $bot_administrator_rights,
		/** Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied. */
		public bool $bot_is_member,
		/** Pass True to request the chat's title */
		public bool $request_title,
		/** Pass True to request the chat's username */
		public bool $request_username,
		/** Pass True to request the chat's photo */
		public bool $request_photo,
	) {
	}
}

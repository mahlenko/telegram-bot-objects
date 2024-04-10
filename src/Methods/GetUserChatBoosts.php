<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\UserChatBoosts;

/**
 * GetUserChatBoosts
 *
 * Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a UserChatBoosts object.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetUserChatBoosts implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = UserChatBoosts::class;

	public function __construct(
		/** Unique identifier for the chat or username of the channel (in the format @channelusername) */
		public int|string|null $chat_id,
		/** Unique identifier of the target user */
		public ?int $user_id,
	) {
	}
}

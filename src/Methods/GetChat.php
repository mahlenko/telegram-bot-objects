<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\Chat;

/**
 * GetChat
 *
 * Use this method to get up to date information about the chat. Returns a Chat object on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetChat implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = Chat::class;

	public function __construct(
		/** Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername) */
		public int|string|null $chat_id,
	) {
	}
}

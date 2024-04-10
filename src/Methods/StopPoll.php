<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\Poll;

/**
 * StopPoll
 *
 * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class StopPoll implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = Poll::class;

	public function __construct(
		/** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
		public int|string $chat_id,
		/** Identifier of the original message with the poll */
		public int $message_id,
		/** A JSON-serialized object for a new message inline keyboard. */
		public ?InlineKeyboardMarkup $reply_markup,
	) {
	}
}

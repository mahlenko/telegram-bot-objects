<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\InlineKeyboardMarkup;

/**
 * EditMessageReplyMarkup
 *
 * Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class EditMessageReplyMarkup implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = 'true';

	public function __construct(
		/** Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
		public int|string|null $chat_id,
		/** Required if inline_message_id is not specified. Identifier of the message to edit */
		public ?int $message_id,
		/** Required if chat_id and message_id are not specified. Identifier of the inline message */
		public ?string $inline_message_id,
		/** A JSON-serialized object for an inline keyboard. */
		public ?InlineKeyboardMarkup $reply_markup,
	) {
	}
}

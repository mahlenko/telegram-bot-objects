<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultCachedSticker
 *
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultCachedSticker implements TelegramTypeInterface
{
	public function __construct(
		/** Type of the result, must be sticker */
		public string $type,
		/** Unique identifier for this result, 1-64 bytes */
		public string $id,
		/** A valid file identifier of the sticker */
		public string $sticker_file_id,
		/** Inline keyboard attached to the message */
		public ?InlineKeyboardMarkup $reply_markup,
		/** Content of the message to be sent instead of the sticker */
		public ?InputMessageContent $input_message_content,
	) {
	}
}

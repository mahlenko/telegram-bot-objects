<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultCachedDocument
 *
 * Represents a link to a file stored on the Telegram servers. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultCachedDocument implements TelegramTypeInterface
{
	public function __construct(
		/** Type of the result, must be document */
		public string $type,
		/** Unique identifier for this result, 1-64 bytes */
		public string $id,
		/** Title for the result */
		public string $title,
		/** A valid file identifier for the file */
		public string $document_file_id,
		/** Short description of the result */
		public ?string $description,
		/** Caption of the document to be sent, 0-1024 characters after entities parsing */
		public ?string $caption,
		/** Mode for parsing entities in the document caption. See formatting options for more details. */
		public ?string $parse_mode,
		/**
		 * List of special entities that appear in the caption, which can be specified instead of parse_mode
		 * @var array<MessageEntity>
		 */
		public ?array $caption_entities,
		/** Inline keyboard attached to the message */
		public ?InlineKeyboardMarkup $reply_markup,
		/** Content of the message to be sent instead of the file */
		public ?InputMessageContent $input_message_content,
	) {
	}
}

<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ForceReply;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\InputFile;
use TelegramBotCast\Types\Message;
use TelegramBotCast\Types\ReplyKeyboardMarkup;
use TelegramBotCast\Types\ReplyKeyboardRemove;
use TelegramBotCast\Types\ReplyParameters;

/**
 * SendSticker
 *
 * Use this method to send static .WEBP, animated .TGS, or video .WEBM stickers. On success, the sent Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SendSticker implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = Message::class;

	public function __construct(
		/** Unique identifier of the business connection on behalf of which the message will be sent */
		public string $business_connection_id,
		/** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
		public int|string|null $chat_id,
		/** Unique identifier for the target message thread (topic) of the forum; for forum supergroups only */
		public int $message_thread_id,
		/** Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP sticker from the Internet, or upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data. More information on Sending Files ». Video and animated stickers can't be sent via an HTTP URL. */
		public InputFile|string|null $sticker,
		/** Emoji associated with the sticker; only for just uploaded stickers */
		public string $emoji,
		/** Sends the message silently. Users will receive a notification with no sound. */
		public bool $disable_notification,
		/** Protects the contents of the sent message from forwarding and saving */
		public bool $protect_content,
		/** Description of the message to reply to */
		public ReplyParameters $reply_parameters,
		/** Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user. Not supported for messages sent on behalf of a business account. */
		public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup,
	) {
	}
}

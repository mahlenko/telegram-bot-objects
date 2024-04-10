<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ForceReply;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\LinkPreviewOptions;
use TelegramBotCast\Types\Message;
use TelegramBotCast\Types\MessageEntity;
use TelegramBotCast\Types\ReplyKeyboardMarkup;
use TelegramBotCast\Types\ReplyKeyboardRemove;
use TelegramBotCast\Types\ReplyParameters;

/**
 * SendMessage
 *
 * Use this method to send text messages. On success, the sent Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SendMessage implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = Message::class;

	public function __construct(
		/** Unique identifier of the business connection on behalf of which the message will be sent */
		public ?string $business_connection_id,
		/** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
		public int|string $chat_id,
		/** Unique identifier for the target message thread (topic) of the forum; for forum supergroups only */
		public ?int $message_thread_id,
		/** Text of the message to be sent, 1-4096 characters after entities parsing */
		public string $text,
		/** Mode for parsing entities in the message text. See formatting options for more details. */
		public ?string $parse_mode,
		/**
		 * A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
		 * @var array<MessageEntity>
		 */
		public ?array $entities,
		/** Link preview generation options for the message */
		public ?LinkPreviewOptions $link_preview_options,
		/** Sends the message silently. Users will receive a notification with no sound. */
		public ?bool $disable_notification,
		/** Protects the contents of the sent message from forwarding and saving */
		public ?bool $protect_content,
		/** Description of the message to reply to */
		public ?ReplyParameters $reply_parameters,
		/** Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user. Not supported for messages sent on behalf of a business account */
		public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
	) {
	}
}

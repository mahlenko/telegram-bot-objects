<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ForceReply;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\Message;
use TelegramBotCast\Types\MessageEntity;
use TelegramBotCast\Types\ReplyKeyboardMarkup;
use TelegramBotCast\Types\ReplyKeyboardRemove;
use TelegramBotCast\Types\ReplyParameters;
use TelegramBotCast\Types\string;

/**
 * SendPoll
 *
 * Use this method to send a native poll. On success, the sent Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SendPoll implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = Message::class;

	public function __construct(
		/** Unique identifier of the business connection on behalf of which the message will be sent */
		public string $business_connection_id,
		/** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
		public int|string|null $chat_id,
		/** Unique identifier for the target message thread (topic) of the forum; for forum supergroups only */
		public int $message_thread_id,
		/** Poll question, 1-300 characters */
		public ?string $question,
		/**
		 * A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
		 * @var array<string>
		 */
		public ?array $options,
		/** True, if the poll needs to be anonymous, defaults to True */
		public bool $is_anonymous,
		/** Poll type, “quiz” or “regular”, defaults to “regular” */
		public string $type,
		/** True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False */
		public bool $allows_multiple_answers,
		/** 0-based identifier of the correct answer option, required for polls in quiz mode */
		public int $correct_option_id,
		/** Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing */
		public string $explanation,
		/** Mode for parsing entities in the explanation. See formatting options for more details. */
		public string $explanation_parse_mode,
		/**
		 * A JSON-serialized list of special entities that appear in the poll explanation, which can be specified instead of parse_mode
		 * @var array<MessageEntity>
		 */
		public array $explanation_entities,
		/** Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date. */
		public int $open_period,
		/** Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with open_period. */
		public int $close_date,
		/** Pass True if the poll needs to be immediately closed. This can be useful for poll preview. */
		public bool $is_closed,
		/** Sends the message silently. Users will receive a notification with no sound. */
		public bool $disable_notification,
		/** Protects the contents of the sent message from forwarding and saving */
		public bool $protect_content,
		/** Description of the message to reply to */
		public ReplyParameters $reply_parameters,
		/** Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user. Not supported for messages sent on behalf of a business account */
		public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup,
	) {
	}
}

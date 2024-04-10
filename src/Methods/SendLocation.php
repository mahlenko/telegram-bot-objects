<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ForceReply;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\Message;
use TelegramBotCast\Types\ReplyKeyboardMarkup;
use TelegramBotCast\Types\ReplyKeyboardRemove;
use TelegramBotCast\Types\ReplyParameters;

/**
 * SendLocation
 *
 * Use this method to send point on the map. On success, the sent Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SendLocation implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = Message::class;

	public function __construct(
		/** Unique identifier of the business connection on behalf of which the message will be sent */
		public string $business_connection_id,
		/** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
		public int|string|null $chat_id,
		/** Unique identifier for the target message thread (topic) of the forum; for forum supergroups only */
		public int $message_thread_id,
		/** Latitude of the location */
		public ?float $latitude,
		/** Longitude of the location */
		public ?float $longitude,
		/** The radius of uncertainty for the location, measured in meters; 0-1500 */
		public float $horizontal_accuracy,
		/** Period in seconds for which the location will be updated (see Live Locations, should be between 60 and 86400. */
		public int $live_period,
		/** For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified. */
		public int $heading,
		/** For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified. */
		public int $proximity_alert_radius,
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

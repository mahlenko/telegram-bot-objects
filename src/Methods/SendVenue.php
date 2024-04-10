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
 * SendVenue
 *
 * Use this method to send information about a venue. On success, the sent Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SendVenue implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = Message::class;

	public function __construct(
		/** Unique identifier of the business connection on behalf of which the message will be sent */
		public ?string $business_connection_id,
		/** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
		public int|string $chat_id,
		/** Unique identifier for the target message thread (topic) of the forum; for forum supergroups only */
		public ?int $message_thread_id,
		/** Latitude of the venue */
		public float $latitude,
		/** Longitude of the venue */
		public float $longitude,
		/** Name of the venue */
		public string $title,
		/** Address of the venue */
		public string $address,
		/** Foursquare identifier of the venue */
		public ?string $foursquare_id,
		/** Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
		public ?string $foursquare_type,
		/** Google Places identifier of the venue */
		public ?string $google_place_id,
		/** Google Places type of the venue. (See supported types.) */
		public ?string $google_place_type,
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

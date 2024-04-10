<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultVenue
 *
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultVenue implements TelegramTypeInterface
{
	public function __construct(
		/** Type of the result, must be venue */
		public ?string $type,
		/** Unique identifier for this result, 1-64 Bytes */
		public ?string $id,
		/** Latitude of the venue location in degrees */
		public ?float $latitude,
		/** Longitude of the venue location in degrees */
		public ?float $longitude,
		/** Title of the venue */
		public ?string $title,
		/** Address of the venue */
		public ?string $address,
		/** Foursquare identifier of the venue if known */
		public string $foursquare_id,
		/** Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
		public string $foursquare_type,
		/** Google Places identifier of the venue */
		public string $google_place_id,
		/** Google Places type of the venue. (See supported types.) */
		public string $google_place_type,
		/** Inline keyboard attached to the message */
		public InlineKeyboardMarkup $reply_markup,
		/** Content of the message to be sent instead of the venue */
		public InputMessageContent $input_message_content,
		/** Url of the thumbnail for the result */
		public string $thumbnail_url,
		/** Thumbnail width */
		public int $thumbnail_width,
		/** Thumbnail height */
		public int $thumbnail_height,
	) {
	}
}

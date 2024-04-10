<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InputVenueMessageContent
 *
 * Represents the content of a venue message to be sent as the result of an inline query.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InputVenueMessageContent implements TelegramTypeInterface
{
    public function __construct(
        /** Latitude of the venue in degrees */
        public float $latitude,
        /** Longitude of the venue in degrees */
        public float $longitude,
        /** Name of the venue */
        public string $title,
        /** Address of the venue */
        public string $address,
        /** Foursquare identifier of the venue, if known */
        public ?string $foursquare_id,
        /** Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
        public ?string $foursquare_type,
        /** Google Places identifier of the venue */
        public ?string $google_place_id,
        /** Google Places type of the venue. (See supported types.) */
        public ?string $google_place_type,
    ) {
    }
}

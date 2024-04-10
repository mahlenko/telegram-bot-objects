<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultLocation
 *
 * Represents a location on a map. By default, the location will be sent by the
 * user. Alternatively, you can use input_message_content to send a message with
 * the specified content instead of the location.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultLocation implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be location */
        public string $type,
        /** Unique identifier for this result, 1-64 Bytes */
        public string $id,
        /** Location latitude in degrees */
        public float $latitude,
        /** Location longitude in degrees */
        public float $longitude,
        /** Location title */
        public string $title,
        /** The radius of uncertainty for the location, measured in meters; 0-1500 */
        public ?float $horizontal_accuracy,
        /**
         * Period in seconds for which the location can be updated, should be between 60
         * and 86400.
         */
        public ?int $live_period,
        /**
         * For live locations, a direction in which the user is moving, in degrees. Must be
         * between 1 and 360 if specified.
         */
        public ?int $heading,
        /**
         * For live locations, a maximum distance for proximity alerts about approaching
         * another chat member, in meters. Must be between 1 and 100000 if specified.
         */
        public ?int $proximity_alert_radius,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** Content of the message to be sent instead of the location */
        public ?InputMessageContent $input_message_content,
        /** Url of the thumbnail for the result */
        public ?string $thumbnail_url,
        /** Thumbnail width */
        public ?int $thumbnail_width,
        /** Thumbnail height */
        public ?int $thumbnail_height,
    ) {
    }
}

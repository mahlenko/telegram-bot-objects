<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InputLocationMessageContent
 *
 * Represents the content of a location message to be sent as the result of an inline query.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InputLocationMessageContent implements TelegramTypeInterface
{
    public function __construct(
        /** Latitude of the location in degrees */
        public float $latitude,
        /** Longitude of the location in degrees */
        public float $longitude,
        /** The radius of uncertainty for the location, measured in meters; 0-1500 */
        public ?float $horizontal_accuracy,
        /** Period in seconds for which the location can be updated, should be between 60 and 86400. */
        public ?int $live_period,
        /** For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified. */
        public ?int $heading,
        /** For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified. */
        public ?int $proximity_alert_radius,
    ) {
    }
}

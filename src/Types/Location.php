<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * Location
 *
 * This object represents a point on the map.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class Location implements TelegramTypeInterface
{
    public function __construct(
        /** Latitude as defined by sender */
        public float $latitude,
        /** Longitude as defined by sender */
        public float $longitude,
        /** The radius of uncertainty for the location, measured in meters; 0-1500 */
        public ?float $horizontal_accuracy,
        /** Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only. */
        public ?int $live_period,
        /** The direction in which user is moving, in degrees; 1-360. For active live locations only. */
        public ?int $heading,
        /** The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only. */
        public ?int $proximity_alert_radius,
    ) {
    }
}

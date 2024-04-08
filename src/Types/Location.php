<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a point on the map.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Location extends TelegramType implements TelegramTypeInterface
{
    /** Latitude as defined by sender */
    public float $latitude;

    /** Longitude as defined by sender */
    public float $longitude;

    /**
     * Optional. The radius of uncertainty for the location, measured in
     * meters; 0-1500
     */
    public ?float $horizontal_accuracy;

    /**
     * Optional. Time relative to the message sending date, during which the
     * location can be updated; in seconds. For active live locations only.
     */
    public ?int $live_period;

    /**
     * Optional. The direction in which user is moving, in degrees; 1-360.
     * For active live locations only.
     */
    public ?int $heading;

    /**
     * Optional. The maximum distance for proximity alerts about approaching
     * another chat member, in meters. For sent live locations only.
     */
    public ?int $proximity_alert_radius;
}

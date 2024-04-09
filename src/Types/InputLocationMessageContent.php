<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents the <a href="#inputmessagecontent">content</a> of a
 * location message to be sent as the result of an inline query.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InputLocationMessageContent extends TelegramType implements InlineModeInterface
{
    /** Latitude of the location in degrees */
    public float $latitude;

    /** Longitude of the location in degrees */
    public float $longitude;

    /**
     * Optional. The radius of uncertainty for the location, measured in
     * meters; 0-1500
     */
    public ?float $horizontal_accuracy;

    /**
     * Optional. Period in seconds for which the location can be updated,
     * should be between 60 and 86400.
     */
    public ?int $live_period;

    /**
     * Optional. For live locations, a direction in which the user is moving,
     * in degrees. Must be between 1 and 360 if specified.
     */
    public ?int $heading;

    /**
     * Optional. For live locations, a maximum distance for proximity alerts
     * about approaching another chat member, in meters. Must be between 1
     * and 100000 if specified.
     */
    public ?int $proximity_alert_radius;
}

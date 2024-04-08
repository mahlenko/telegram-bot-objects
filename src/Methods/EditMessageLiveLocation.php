<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatingMessagesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InlineKeyboardMarkup;

/**
 * Use this method to edit live location messages. A location can be
 * edited until its live_period expires or editing is explicitly disabled
 * by a call to stopMessageLiveLocation. On success, if the edited
 * message is not an inline message, the edited Message is returned,
 * otherwise True is returned.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class EditMessageLiveLocation extends TelegramMethod implements UpdatingMessagesInterface
{
    /**
     * Required if inline_message_id is not specified. Unique identifier for
     * the target chat or username of the target channel (in the format
     * @channelusername)
     */
    public int|string|null $chat_id;

    /**
     * Required if inline_message_id is not specified. Identifier of the
     * message to edit
     */
    public ?int $message_id;

    /**
     * Required if chat_id and message_id are not specified. Identifier of
     * the inline message
     */
    public ?string $inline_message_id;

    /** Latitude of new location */
    public float $latitude;

    /** Longitude of new location */
    public float $longitude;

    /** The radius of uncertainty for the location, measured in meters; 0-1500 */
    public ?float $horizontal_accuracy;

    /**
     * Direction in which the user is moving, in degrees. Must be between 1
     * and 360 if specified.
     */
    public ?int $heading;

    /**
     * The maximum distance for proximity alerts about approaching another
     * chat member, in meters. Must be between 1 and 100000 if specified.
     */
    public ?int $proximity_alert_radius;

    /** A JSON-serialized object for a new inline keyboard. */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['latitude', 'longitude'];
}

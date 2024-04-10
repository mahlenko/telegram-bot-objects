<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\InlineKeyboardMarkup;

/**
 * EditMessageLiveLocation
 *
 * Use this method to edit live location messages. A location can be edited until its live_period expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class EditMessageLiveLocation implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
        public int|string $chat_id,
        /** Required if inline_message_id is not specified. Identifier of the message to edit */
        public int $message_id,
        /** Required if chat_id and message_id are not specified. Identifier of the inline message */
        public string $inline_message_id,
        /** Latitude of new location */
        public ?float $latitude,
        /** Longitude of new location */
        public ?float $longitude,
        /** The radius of uncertainty for the location, measured in meters; 0-1500 */
        public float $horizontal_accuracy,
        /** Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified. */
        public int $heading,
        /** The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified. */
        public int $proximity_alert_radius,
        /** A JSON-serialized object for a new inline keyboard. */
        public InlineKeyboardMarkup $reply_markup,
    ) {
    }
}

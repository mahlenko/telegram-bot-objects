<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ForceReply;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\Message;
use TelegramBot\Types\ReplyKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardRemove;
use TelegramBot\Types\ReplyParameters;

/**
 * Use this method to send information about a venue. On success, the
 * sent <a href="#message">Message</a> is returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SendVenue extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier of the business connection on behalf of which the
     * message will be sent
     */
    public ?string $business_connection_id;

    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * Unique identifier for the target message thread (topic) of the forum;
     * for forum supergroups only
     */
    public ?int $message_thread_id;

    /** Latitude of the venue */
    public float $latitude;

    /** Longitude of the venue */
    public float $longitude;

    /** Name of the venue */
    public string $title;

    /** Address of the venue */
    public string $address;

    /** Foursquare identifier of the venue */
    public ?string $foursquare_id;

    /**
     * Foursquare type of the venue, if known. (For example,
     * “arts_entertainment/default”, “arts_entertainment/aquarium” or
     * “food/icecream”.)
     */
    public ?string $foursquare_type;

    /** Google Places identifier of the venue */
    public ?string $google_place_id;

    /** Google Places type of the venue. (See supported types.) */
    public ?string $google_place_type;

    /**
     * Sends the message silently. Users will receive a notification with no
     * sound.
     */
    public ?bool $disable_notification;

    /** Protects the contents of the sent message from forwarding and saving */
    public ?bool $protect_content;

    /** Description of the message to reply to */
    public ?ReplyParameters $reply_parameters;

    /**
     * Additional interface options. A JSON-serialized object for an inline
     * keyboard, custom reply keyboard, instructions to remove a reply
     * keyboard or to force a reply from the user. Not supported for messages
     * sent on behalf of a business account
     */
    public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'latitude', 'longitude', 'title', 'address'];

    /** Response mapping type. */
    public string $response_type = Message::class;
}

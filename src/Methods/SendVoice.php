<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ForceReply;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\InputFile;
use TelegramBot\Types\MessageEntity;
use TelegramBot\Types\ReplyKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardRemove;
use TelegramBot\Types\ReplyParameters;

/**
 * Use this method to send audio files, if you want Telegram clients to
 * display the file as a playable voice message. For this to work, your
 * audio must be in an .OGG file encoded with OPUS (other formats may be
 * sent as Audio or Document). On success, the sent Message is returned.
 * Bots can currently send voice messages of up to 50 MB in size, this
 * limit may be changed in the future.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendVoice extends TelegramMethod implements TelegramMethodInterface
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

    /**
     * Audio file to send. Pass a file_id as String to send a file that
     * exists on the Telegram servers (recommended), pass an HTTP URL as a
     * String for Telegram to get a file from the Internet, or upload a new
     * one using multipart/form-data. More information on Sending Files »
     */
    public InputFile|string $voice;

    /** Voice message caption, 0-1024 characters after entities parsing */
    public ?string $caption;

    /**
     * Mode for parsing entities in the voice message caption. See formatting
     * options for more details.
     */
    public ?string $parse_mode;

    /**
     * A JSON-serialized list of special entities that appear in the caption,
     * which can be specified instead of parse_mode
     *
     * @var array<MessageEntity>
     */
    public ?array $caption_entities;

    /** Duration of the voice message in seconds */
    public ?int $duration;

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
    public array $required_properties = ['chat_id', 'voice'];
}

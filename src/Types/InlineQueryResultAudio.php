<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a link to an MP3 audio file. By default, this audio file
 * will be sent by the user. Alternatively, you can use
 * input_message_content to send a message with the specified content
 * instead of the audio.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineQueryResultAudio extends TelegramType implements InlineModeInterface
{
    /** Type of the result, must be audio */
    public string $type;

    /** Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** A valid URL for the audio file */
    public string $audio_url;

    /** Title */
    public string $title;

    /** Optional. Caption, 0-1024 characters after entities parsing */
    public ?string $caption;

    /**
     * Optional. Mode for parsing entities in the audio caption. See
     * formatting options for more details.
     */
    public ?string $parse_mode;

    /**
     * Optional. List of special entities that appear in the caption, which
     * can be specified instead of parse_mode
     *
     * @var array<MessageEntity>
     */
    public ?array $caption_entities;

    /** Optional. Performer */
    public ?string $performer;

    /** Optional. Audio duration in seconds */
    public ?int $audio_duration;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;

    /** Optional. Content of the message to be sent instead of the audio */
    public ?InputMessageContent $input_message_content;
}

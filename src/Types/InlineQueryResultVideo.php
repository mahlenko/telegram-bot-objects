<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a link to a page containing an embedded video player or a
 * video file. By default, this video file will be sent by the user with
 * an optional caption. Alternatively, you can use input_message_content
 * to send a message with the specified content instead of the video.
 *
 * If an InlineQueryResultVideo message contains an embedded video (e.g.,
 * YouTube), you must replace its content using input_message_content.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineQueryResultVideo extends TelegramType implements InlineModeInterface
{
    /** Type of the result, must be video */
    public string $type;

    /** Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** A valid URL for the embedded video player or video file */
    public string $video_url;

    /**
     * MIME type of the content of the video URL, “text/html” or
     * “video/mp4”
     */
    public string $mime_type;

    /** URL of the thumbnail (JPEG only) for the video */
    public string $thumbnail_url;

    /** Title for the result */
    public string $title;

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after
     * entities parsing
     */
    public ?string $caption;

    /**
     * Optional. Mode for parsing entities in the video caption. See
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

    /** Optional. Video width */
    public ?int $video_width;

    /** Optional. Video height */
    public ?int $video_height;

    /** Optional. Video duration in seconds */
    public ?int $video_duration;

    /** Optional. Short description of the result */
    public ?string $description;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * Optional. Content of the message to be sent instead of the video. This
     * field is required if InlineQueryResultVideo is used to send an
     * HTML-page as a result (e.g., a YouTube video).
     */
    public ?InputMessageContent $input_message_content;
}

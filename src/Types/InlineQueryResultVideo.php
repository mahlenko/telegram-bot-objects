<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultVideo
 *
 * Represents a link to a page containing an embedded video player or a video file.
 * By default, this video file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the
 * specified content instead of the video.
 *
 * If an InlineQueryResultVideo message
 * contains an embedded video (e.g., YouTube), you must replace its content using
 * input_message_content.
 *
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultVideo implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be video */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** A valid URL for the embedded video player or video file */
        public string $video_url,
        /** MIME type of the content of the video URL, “text/html” or “video/mp4” */
        public string $mime_type,
        /** URL of the thumbnail (JPEG only) for the video */
        public string $thumbnail_url,
        /** Title for the result */
        public string $title,
        /** Caption of the video to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * Mode for parsing entities in the video caption. See formatting options for more
         * details.
         */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be specified
         * instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /** Video width */
        public ?int $video_width,
        /** Video height */
        public ?int $video_height,
        /** Video duration in seconds */
        public ?int $video_duration,
        /** Short description of the result */
        public ?string $description,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the video. This field is required
         * if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a
         * YouTube video).
         */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultCachedVideo
 *
 * Represents a link to a video file stored on the Telegram servers. By default,
 * this video file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the
 * specified content instead of the video.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultCachedVideo implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be video */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** A valid file identifier for the video file */
        public string $video_file_id,
        /** Title for the result */
        public string $title,
        /** Short description of the result */
        public ?string $description,
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
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** Content of the message to be sent instead of the video */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}

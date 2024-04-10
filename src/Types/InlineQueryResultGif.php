<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultGif
 *
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultGif implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be gif */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** A valid URL for the GIF file. File size must not exceed 1MB */
        public string $gif_url,
        /** Width of the GIF */
        public ?int $gif_width,
        /** Height of the GIF */
        public ?int $gif_height,
        /** Duration of the GIF in seconds */
        public ?int $gif_duration,
        /** URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result */
        public string $thumbnail_url,
        /** MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg” */
        public ?string $thumbnail_mime_type,
        /** Title for the result */
        public ?string $title,
        /** Caption of the GIF file to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /** Mode for parsing entities in the caption. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** Content of the message to be sent instead of the GIF animation */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}

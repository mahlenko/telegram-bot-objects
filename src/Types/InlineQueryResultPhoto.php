<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultPhoto
 *
 * Represents a link to a photo. By default, this photo will be sent by the user
 * with optional caption. Alternatively, you can use input_message_content to send
 * a message with the specified content instead of the photo.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultPhoto implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be photo */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /**
         * A valid URL of the photo. Photo must be in JPEG format. Photo size must not
         * exceed 5MB
         */
        public string $photo_url,
        /** URL of the thumbnail for the photo */
        public string $thumbnail_url,
        /** Width of the photo */
        public ?int $photo_width,
        /** Height of the photo */
        public ?int $photo_height,
        /** Title for the result */
        public ?string $title,
        /** Short description of the result */
        public ?string $description,
        /** Caption of the photo to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * Mode for parsing entities in the photo caption. See formatting options for more
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
        /** Content of the message to be sent instead of the photo */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}

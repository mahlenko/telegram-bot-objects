<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultCachedGif
 *
 * Represents a link to an animated GIF file stored on the Telegram servers. By
 * default, this animated GIF file will be sent by the user with an optional
 * caption. Alternatively, you can use input_message_content to send a message with
 * specified content instead of the animation.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultCachedGif implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be gif */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** A valid file identifier for the GIF file */
        public string $gif_file_id,
        /** Title for the result */
        public ?string $title,
        /** Caption of the GIF file to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * Mode for parsing entities in the caption. See formatting options for more
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
        /** Content of the message to be sent instead of the GIF animation */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}

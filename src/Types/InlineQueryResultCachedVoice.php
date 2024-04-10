<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultCachedVoice
 *
 * Represents a link to a voice message stored on the Telegram servers. By default,
 * this voice message will be sent by the user. Alternatively, you can use
 * input_message_content to send a message with the specified content instead of
 * the voice message.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultCachedVoice implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be voice */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** A valid file identifier for the voice message */
        public string $voice_file_id,
        /** Voice message title */
        public string $title,
        /** Caption, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * Mode for parsing entities in the voice message caption. See formatting options
         * for more details.
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
        /** Content of the message to be sent instead of the voice message */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultAudio
 *
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultAudio implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be audio */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** A valid URL for the audio file */
        public string $audio_url,
        /** Title */
        public string $title,
        /** Caption, 0-1024 characters after entities parsing */
        public ?string $caption,
        /** Mode for parsing entities in the audio caption. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /** Performer */
        public ?string $performer,
        /** Audio duration in seconds */
        public ?int $audio_duration,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** Content of the message to be sent instead of the audio */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}

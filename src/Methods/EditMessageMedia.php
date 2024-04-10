<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\InputMedia;

/**
 * EditMessageMedia
 *
 * Use this method to edit animation, audio, document, photo, or video messages. If
 * a message is part of a message album, then it can be edited only to an audio for
 * audio albums, only to a document for document albums and to a photo or a video
 * otherwise. When an inline message is edited, a new file can't be uploaded; use a
 * previously uploaded file via its file_id or specify a URL. On success, if the
 * edited message is not an inline message, the edited Message is returned,
 * otherwise True is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class EditMessageMedia implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /**
         * Required if inline_message_id is not specified. Unique identifier for
         * the target chat or username of the target channel (in the format
         * @channelusername)
         */
        public int|string|null $chat_id,
        /**
         * Required if inline_message_id is not specified. Identifier of the
         * message to edit
         */
        public ?int $message_id,
        /**
         * Required if chat_id and message_id are not specified. Identifier of
         * the inline message
         */
        public ?string $inline_message_id,
        /** A JSON-serialized object for a new media content of the message */
        public InputMedia $media,
        /** A JSON-serialized object for a new inline keyboard. */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}

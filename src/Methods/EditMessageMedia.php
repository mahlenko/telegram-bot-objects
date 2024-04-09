<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatingMessagesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\InputMedia;
use TelegramBot\Types\Message;

/**
 * Use this method to edit animation, audio, document, photo, or video
 * messages. If a message is part of a message album, then it can be
 * edited only to an audio for audio albums, only to a document for
 * document albums and to a photo or a video otherwise. When an inline
 * message is edited, a new file can't be uploaded; use a previously
 * uploaded file via its file_id or specify a URL. On success, if the
 * edited message is not an inline message, the edited <a
 * href="#message">Message</a> is returned, otherwise <em>True</em> is
 * returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class EditMessageMedia extends TelegramMethod implements UpdatingMessagesInterface
{
    /**
     * Required if inline_message_id is not specified. Unique identifier for
     * the target chat or username of the target channel (in the format
     * @channelusername)
     */
    public int|string|null $chat_id;

    /**
     * Required if inline_message_id is not specified. Identifier of the
     * message to edit
     */
    public ?int $message_id;

    /**
     * Required if chat_id and message_id are not specified. Identifier of
     * the inline message
     */
    public ?string $inline_message_id;

    /** A JSON-serialized object for a new media content of the message */
    public InputMedia $media;

    /** A JSON-serialized object for a new inline keyboard. */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['media'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

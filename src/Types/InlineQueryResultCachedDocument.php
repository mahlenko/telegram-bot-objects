<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a link to a file stored on the Telegram servers. By
 * default, this file will be sent by the user with an optional caption.
 * Alternatively, you can use <em>input_message_content</em> to send a
 * message with the specified content instead of the file.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InlineQueryResultCachedDocument extends TelegramType implements InlineModeInterface
{
    /** Type of the result, must be document */
    public string $type;

    /** Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** Title for the result */
    public string $title;

    /** A valid file identifier for the file */
    public string $document_file_id;

    /** Optional. Short description of the result */
    public ?string $description;

    /**
     * Optional. Caption of the document to be sent, 0-1024 characters after
     * entities parsing
     */
    public ?string $caption;

    /**
     * Optional. Mode for parsing entities in the document caption. See
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

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;

    /** Optional. Content of the message to be sent instead of the file */
    public ?InputMessageContent $input_message_content;
}

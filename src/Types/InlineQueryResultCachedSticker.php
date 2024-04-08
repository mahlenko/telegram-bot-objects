<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a link to a sticker stored on the Telegram servers. By
 * default, this sticker will be sent by the user. Alternatively, you can
 * use input_message_content to send a message with the specified content
 * instead of the sticker.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineQueryResultCachedSticker extends TelegramType implements InlineModeInterface
{
    /** Type of the result, must be sticker */
    public string $type;

    /** Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** A valid file identifier of the sticker */
    public string $sticker_file_id;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;

    /** Optional. Content of the message to be sent instead of the sticker */
    public ?InputMessageContent $input_message_content;
}

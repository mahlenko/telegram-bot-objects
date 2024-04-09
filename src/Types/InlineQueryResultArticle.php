<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a link to an article or web page.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InlineQueryResultArticle extends TelegramType implements InlineModeInterface
{
    /** Type of the result, must be article */
    public string $type;

    /** Unique identifier for this result, 1-64 Bytes */
    public string $id;

    /** Title of the result */
    public string $title;

    /** Content of the message to be sent */
    public InputMessageContent $input_message_content;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;

    /** Optional. URL of the result */
    public ?string $url;

    /**
     * Optional. Pass True if you don't want the URL to be shown in the
     * message
     */
    public ?bool $hide_url;

    /** Optional. Short description of the result */
    public ?string $description;

    /** Optional. Url of the thumbnail for the result */
    public ?string $thumbnail_url;

    /** Optional. Thumbnail width */
    public ?int $thumbnail_width;

    /** Optional. Thumbnail height */
    public ?int $thumbnail_height;
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultArticle
 *
 * Represents a link to an article or web page.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultArticle implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be article */
        public string $type,
        /** Unique identifier for this result, 1-64 Bytes */
        public string $id,
        /** Title of the result */
        public string $title,
        /** Content of the message to be sent */
        public InputMessageContent $input_message_content,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** URL of the result */
        public ?string $url,
        /** Pass True if you don't want the URL to be shown in the message */
        public ?bool $hide_url,
        /** Short description of the result */
        public ?string $description,
        /** Url of the thumbnail for the result */
        public ?string $thumbnail_url,
        /** Thumbnail width */
        public ?int $thumbnail_width,
        /** Thumbnail height */
        public ?int $thumbnail_height,
    ) {
    }
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineQueryResultContact
 *
 * Represents a contact with a phone number. By default, this contact will be sent
 * by the user. Alternatively, you can use input_message_content to send a message
 * with the specified content instead of the contact.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineQueryResultContact implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be contact */
        public string $type,
        /** Unique identifier for this result, 1-64 Bytes */
        public string $id,
        /** Contact's phone number */
        public string $phone_number,
        /** Contact's first name */
        public string $first_name,
        /** Contact's last name */
        public ?string $last_name,
        /** Additional data about the contact in the form of a vCard, 0-2048 bytes */
        public ?string $vcard,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** Content of the message to be sent instead of the contact */
        public ?InputMessageContent $input_message_content,
        /** Url of the thumbnail for the result */
        public ?string $thumbnail_url,
        /** Thumbnail width */
        public ?int $thumbnail_width,
        /** Thumbnail height */
        public ?int $thumbnail_height,
    ) {
    }
}

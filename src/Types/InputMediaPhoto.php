<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InputMediaPhoto
 *
 * Represents a photo to be sent.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InputMediaPhoto implements TelegramTypeInterface
{
    public function __construct(
        /** Type of the result, must be photo */
        public string $type,
        /**
         * File to send. Pass a file_id to send a file that exists on the
         * Telegram servers (recommended), pass an HTTP URL for Telegram to get a
         * file from the Internet, or pass “attach://<file_attach_name>” to
         * upload a new one using multipart/form-data under <file_attach_name>
         * name. More information on Sending Files »
         */
        public string $media,
        /**
         * Caption of the photo to be sent, 0-1024 characters after entities
         * parsing
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the photo caption. See formatting options
         * for more details.
         */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be
         * specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /** Pass True if the photo needs to be covered with a spoiler animation */
        public ?bool $has_spoiler,
    ) {
    }
}

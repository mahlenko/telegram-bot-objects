<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InputTextMessageContent
 *
 * Represents the content of a text message to be sent as the result of an inline query.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InputTextMessageContent implements TelegramTypeInterface
{
    public function __construct(
        /** Text of the message to be sent, 1-4096 characters */
        public string $message_text,
        /** Mode for parsing entities in the message text. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in message text, which can be specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $entities,
        /** Link preview generation options for the message */
        public ?LinkPreviewOptions $link_preview_options,
    ) {
    }
}

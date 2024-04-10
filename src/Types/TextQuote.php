<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * TextQuote
 *
 * This object contains information about the quoted part of a message that is
 * replied to by the given message.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class TextQuote implements TelegramTypeInterface
{
    public function __construct(
        /** Text of the quoted part of a message that is replied to by the given message */
        public string $text,
        /**
         * Special entities that appear in the quote. Currently, only bold, italic,
         * underline, strikethrough, spoiler, and custom_emoji entities are kept in quotes.
         * @var array<MessageEntity>
         */
        public ?array $entities,
        /**
         * Approximate quote position in the original message in UTF-16 code units as
         * specified by the sender
         */
        public int $position,
        /**
         * True, if the quote was chosen manually by the message sender. Otherwise, the
         * quote was added automatically by the server.
         */
        public ?true $is_manual,
    ) {
    }
}

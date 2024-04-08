<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about the quoted part of a message
 * that is replied to by the given message.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class TextQuote extends TelegramType implements TelegramTypeInterface
{
    /**
     * Text of the quoted part of a message that is replied to by the given
     * message
     */
    public string $text;

    /**
     * Optional. Special entities that appear in the quote. Currently, only
     * bold, italic, underline, strikethrough, spoiler, and custom_emoji
     * entities are kept in quotes.
     *
     * @var array<MessageEntity>
     */
    public ?array $entities;

    /**
     * Approximate quote position in the original message in UTF-16 code
     * units as specified by the sender
     */
    public int $position;

    /**
     * Optional. True, if the quote was chosen manually by the message
     * sender. Otherwise, the quote was added automatically by the server.
     */
    public ?bool $is_manual;
}

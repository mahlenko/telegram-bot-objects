<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramType;

/**
 * Represents the <a href="#inputmessagecontent">content</a> of a text
 * message to be sent as the result of an inline query.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InputTextMessageContent extends TelegramType implements InlineModeInterface
{
    /** Text of the message to be sent, 1-4096 characters */
    public string $message_text;

    /**
     * Optional. Mode for parsing entities in the message text. See
     * formatting options for more details.
     */
    public ?string $parse_mode;

    /**
     * Optional. List of special entities that appear in message text, which
     * can be specified instead of parse_mode
     *
     * @var array<MessageEntity>
     */
    public ?array $entities;

    /** Optional. Link preview generation options for the message */
    public ?LinkPreviewOptions $link_preview_options;
}

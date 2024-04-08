<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatingMessagesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\LinkPreviewOptions;
use TelegramBot\Types\MessageEntity;

/**
 * Use this method to edit text and game messages. On success, if the
 * edited message is not an inline message, the edited Message is
 * returned, otherwise True is returned.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class EditMessageText extends TelegramMethod implements UpdatingMessagesInterface
{
    /**
     * Required if inline_message_id is not specified. Unique identifier for
     * the target chat or username of the target channel (in the format
     * @channelusername)
     */
    public int|string|null $chat_id;

    /**
     * Required if inline_message_id is not specified. Identifier of the
     * message to edit
     */
    public ?int $message_id;

    /**
     * Required if chat_id and message_id are not specified. Identifier of
     * the inline message
     */
    public ?string $inline_message_id;

    /** New text of the message, 1-4096 characters after entities parsing */
    public string $text;

    /**
     * Mode for parsing entities in the message text. See formatting options
     * for more details.
     */
    public ?string $parse_mode;

    /**
     * A JSON-serialized list of special entities that appear in message
     * text, which can be specified instead of parse_mode
     *
     * @var array<MessageEntity>
     */
    public ?array $entities;

    /** Link preview generation options for the message */
    public ?LinkPreviewOptions $link_preview_options;

    /** A JSON-serialized object for an inline keyboard. */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['text'];
}

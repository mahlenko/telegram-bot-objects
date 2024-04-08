<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatingMessagesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InlineKeyboardMarkup;

/**
 * Use this method to edit only the reply markup of messages. On success,
 * if the edited message is not an inline message, the edited Message is
 * returned, otherwise True is returned.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class EditMessageReplyMarkup extends TelegramMethod implements UpdatingMessagesInterface
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

    /** A JSON-serialized object for an inline keyboard. */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}

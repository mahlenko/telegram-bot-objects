<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatingMessagesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InlineKeyboardMarkup;

/**
 * Use this method to stop a poll which was sent by the bot. On success,
 * the stopped Poll is returned.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class StopPoll extends TelegramMethod implements UpdatingMessagesInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Identifier of the original message with the poll */
    public int $message_id;

    /** A JSON-serialized object for a new message inline keyboard. */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'message_id'];
}

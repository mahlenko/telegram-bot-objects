<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatingMessagesInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to delete multiple messages simultaneously. If some of
 * the specified messages can't be found, they are skipped. Returns True
 * on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class DeleteMessages extends TelegramMethod implements UpdatingMessagesInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * A JSON-serialized list of 1-100 identifiers of messages to delete. See
     * deleteMessage for limitations on which messages can be deleted
     *
     * @var array<int>
     */
    public array $message_ids;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'message_ids'];
}

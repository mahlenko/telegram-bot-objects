<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to get up to date information about the chat. Returns
 * a Chat object on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetChat extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup or channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id'];
}

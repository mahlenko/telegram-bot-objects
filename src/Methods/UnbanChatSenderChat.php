<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to unban a previously banned channel chat in a
 * supergroup or channel. The bot must be an administrator for this to
 * work and must have the appropriate administrator rights. Returns True
 * on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class UnbanChatSenderChat extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target sender chat */
    public int $sender_chat_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'sender_chat_id'];
}

<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to get the current value of the bot's menu button in a
 * private chat, or the default menu button. Returns MenuButton on
 * success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetChatMenuButton extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target private chat. If not specified,
     * default bot's menu button will be returned
     */
    public ?int $chat_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}

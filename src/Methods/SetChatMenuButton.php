<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\MenuButton;

/**
 * Use this method to change the bot's menu button in a private chat, or
 * the default menu button. Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetChatMenuButton extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * Unique identifier for the target private chat. If not specified,
     * default bot's menu button will be changed
     */
    public ?int $chat_id;

    /**
     * A JSON-serialized object for the bot's new menu button. Defaults to
     * MenuButtonDefault
     */
    public ?MenuButton $menu_button;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}

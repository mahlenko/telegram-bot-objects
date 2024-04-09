<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\MenuButton;

/**
 * Use this method to change the bot's menu button in a private chat, or
 * the default menu button. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetChatMenuButton extends TelegramMethod implements MethodsInterface
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

    /** Response mapping type. */
    public string $response_type = 'bool';
}

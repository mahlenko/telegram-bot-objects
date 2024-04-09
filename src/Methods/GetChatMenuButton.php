<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\MenuButton;

/**
 * Use this method to get the current value of the bot's menu button in a
 * private chat, or the default menu button. Returns <a
 * href="#menubutton">MenuButton</a> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetChatMenuButton extends TelegramMethod implements MethodsInterface
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

    /** Response mapping type. */
    public string $response_type = MenuButton::class;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a <a href="/bots/features#keyboards">custom
 * keyboard</a> with reply options (see <a
 * href="/bots/features#keyboards">Introduction to bots</a> for details
 * and examples).
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ReplyKeyboardMarkup extends TelegramType implements TypesInterface
{
    /**
     * Array of button rows, each represented by an Array of KeyboardButton
     * objects
     *
     * @var array<array>
     */
    public array $keyboard;

    /**
     * Optional. Requests clients to always show the keyboard when the
     * regular keyboard is hidden. Defaults to false, in which case the
     * custom keyboard can be hidden and opened with a keyboard icon.
     */
    public ?bool $is_persistent;

    /**
     * Optional. Requests clients to resize the keyboard vertically for
     * optimal fit (e.g., make the keyboard smaller if there are just two
     * rows of buttons). Defaults to false, in which case the custom keyboard
     * is always of the same height as the app's standard keyboard.
     */
    public ?bool $resize_keyboard;

    /**
     * Optional. Requests clients to hide the keyboard as soon as it's been
     * used. The keyboard will still be available, but clients will
     * automatically display the usual letter-keyboard in the chat - the user
     * can press a special button in the input field to see the custom
     * keyboard again. Defaults to false.
     */
    public ?bool $one_time_keyboard;

    /**
     * Optional. The placeholder to be shown in the input field when the
     * keyboard is active; 1-64 characters
     */
    public ?string $input_field_placeholder;

    /**
     * Optional. Use this parameter if you want to show the keyboard to
     * specific users only. Targets: 1) users that are @mentioned in the text
     * of the Message object; 2) if the bot's message is a reply to a message
     * in the same chat and forum topic, sender of the original
     * message.Example: A user requests to change the bot's language, bot
     * replies to the request with a keyboard to select the new language.
     * Other users in the group don't see the keyboard.
     */
    public ?bool $selective;
}

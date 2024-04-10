<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InlineKeyboardButton
 *
 * This object represents one button of an inline keyboard. You must use exactly
 * one of the optional fields.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InlineKeyboardButton implements TelegramTypeInterface
{
    public function __construct(
        /** Label text on the button */
        public string $text,
        /**
         * HTTP or tg:// URL to be opened when the button is pressed. Links
         * tg://user?id=<user_id> can be used to mention a user by their
         * identifier without using a username, if this is allowed by their
         * privacy settings.
         */
        public ?string $url,
        /**
         * Data to be sent in a callback query to the bot when button is pressed,
         * 1-64 bytes
         */
        public ?string $callback_data,
        /**
         * Description of the Web App that will be launched when the user presses
         * the button. The Web App will be able to send an arbitrary message on
         * behalf of the user using the method answerWebAppQuery. Available only
         * in private chats between a user and the bot.
         */
        public ?WebAppInfo $web_app,
        /**
         * An HTTPS URL used to automatically authorize the user. Can be used as
         * a replacement for the Telegram Login Widget.
         */
        public ?LoginUrl $login_url,
        /**
         * If set, pressing the button will prompt the user to select one of
         * their chats, open that chat and insert the bot's username and the
         * specified inline query in the input field. May be empty, in which case
         * just the bot's username will be inserted.
         */
        public ?string $switch_inline_query,
        /**
         * If set, pressing the button will insert the bot's username and the
         * specified inline query in the current chat's input field. May be
         * empty, in which case only the bot's username will be inserted.This
         * offers a quick way for the user to open your bot in inline mode in the
         * same chat - good for selecting something from multiple options.
         */
        public ?string $switch_inline_query_current_chat,
        /**
         * If set, pressing the button will prompt the user to select one of
         * their chats of the specified type, open that chat and insert the bot's
         * username and the specified inline query in the input field
         */
        public ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat,
        /**
         * Description of the game that will be launched when the user presses
         * the button.NOTE: This type of button must always be the first button
         * in the first row.
         */
        public ?CallbackGame $callback_game,
        /**
         * Specify True, to send a Pay button.NOTE: This type of button must
         * always be the first button in the first row and can only be used in
         * invoice messages.
         */
        public ?bool $pay,
    ) {
    }
}

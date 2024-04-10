<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * SetMyShortDescription
 *
 * Use this method to change the bot's short description, which is shown on the
 * bot's profile page and is sent together with the link when users share the bot.
 * Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SetMyShortDescription implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /**
         * New short description for the bot; 0-120 characters. Pass an empty string to
         * remove the dedicated short description for the given language.
         */
        public ?string $short_description,
        /**
         * A two-letter ISO 639-1 language code. If empty, the short description will be
         * applied to all users for whose language there is no dedicated short description.
         */
        public ?string $language_code,
    ) {
    }
}

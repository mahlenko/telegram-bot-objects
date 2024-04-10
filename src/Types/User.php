<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * User
 *
 * This object represents a Telegram user or bot.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class User implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for this user or bot. This number may have more than
         * 32 significant bits and some programming languages may have
         * difficulty/silent defects in interpreting it. But it has at most 52
         * significant bits, so a 64-bit integer or double-precision float type
         * are safe for storing this identifier.
         */
        public int $id,
        /** True, if this user is a bot */
        public bool $is_bot,
        /** User's or bot's first name */
        public string $first_name,
        /** User's or bot's last name */
        public ?string $last_name,
        /** User's or bot's username */
        public ?string $username,
        /** IETF language tag of the user's language */
        public ?string $language_code,
        /** True, if this user is a Telegram Premium user */
        public ?true $is_premium,
        /** True, if this user added the bot to the attachment menu */
        public ?true $added_to_attachment_menu,
        /** True, if the bot can be invited to groups. Returned only in getMe. */
        public ?bool $can_join_groups,
        /** True, if privacy mode is disabled for the bot. Returned only in getMe. */
        public ?bool $can_read_all_group_messages,
        /** True, if the bot supports inline queries. Returned only in getMe. */
        public ?bool $supports_inline_queries,
        /**
         * True, if the bot can be connected to a Telegram Business account to
         * receive its messages. Returned only in getMe.
         */
        public ?bool $can_connect_to_business,
    ) {
    }
}

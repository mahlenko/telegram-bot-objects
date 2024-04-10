<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * SetChatAdministratorCustomTitle
 *
 * Use this method to set a custom title for an administrator in a supergroup
 * promoted by the bot. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SetChatAdministratorCustomTitle implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * supergroup (in the format @supergroupusername)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
        /**
         * New custom title for the administrator; 0-16 characters, emoji are not
         * allowed
         */
        public string $custom_title,
    ) {
    }
}

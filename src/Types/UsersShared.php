<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * UsersShared
 *
 * This object contains information about the users whose identifiers were shared
 * with the bot using a KeyboardButtonRequestUsers button.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class UsersShared implements TelegramTypeInterface
{
    public function __construct(
        /** Identifier of the request */
        public int $request_id,
        /**
         * Information about users shared with the bot.
         * @var array<SharedUser>
         */
        public array $users,
    ) {
    }
}

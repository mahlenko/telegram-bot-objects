<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * KeyboardButtonRequestUsers
 *
 * This object defines the criteria used to request suitable users. Information
 * about the selected users will be shared with the bot when the corresponding
 * button is pressed. More about requesting users »
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class KeyboardButtonRequestUsers implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Signed 32-bit identifier of the request that will be received back in the
         * UsersShared object. Must be unique within the message
         */
        public int $request_id,
        /**
         * Pass True to request bots, pass False to request regular users. If not
         * specified, no additional restrictions are applied.
         */
        public ?bool $user_is_bot,
        /**
         * Pass True to request premium users, pass False to request non-premium users. If
         * not specified, no additional restrictions are applied.
         */
        public ?bool $user_is_premium,
        /** The maximum number of users to be selected; 1-10. Defaults to 1. */
        public ?int $max_quantity,
        /** Pass True to request the users' first and last name */
        public ?bool $request_name,
        /** Pass True to request the users' username */
        public ?bool $request_username,
        /** Pass True to request the users' photo */
        public ?bool $request_photo,
    ) {
    }
}

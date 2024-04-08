<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object defines the criteria used to request suitable users.
 * Information about the selected users will be shared with the bot when
 * the corresponding button is pressed. More about requesting users »
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class KeyboardButtonRequestUsers extends TelegramType implements TypesInterface
{
    /**
     * Signed 32-bit identifier of the request that will be received back in
     * the UsersShared object. Must be unique within the message
     */
    public int $request_id;

    /**
     * Optional. Pass True to request bots, pass False to request regular
     * users. If not specified, no additional restrictions are applied.
     */
    public ?bool $user_is_bot;

    /**
     * Optional. Pass True to request premium users, pass False to request
     * non-premium users. If not specified, no additional restrictions are
     * applied.
     */
    public ?bool $user_is_premium;

    /**
     * Optional. The maximum number of users to be selected; 1-10. Defaults
     * to 1.
     */
    public ?int $max_quantity;

    /** Optional. Pass True to request the users' first and last name */
    public ?bool $request_name;

    /** Optional. Pass True to request the users' username */
    public ?bool $request_username;

    /** Optional. Pass True to request the users' photo */
    public ?bool $request_photo;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about the users whose identifiers
 * were shared with the bot using a KeyboardButtonRequestUsers button.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class UsersShared extends TelegramType implements TypesInterface
{
    /** Identifier of the request */
    public int $request_id;

    /**
     * Information about users shared with the bot.
     *
     * @var array<SharedUser>
     */
    public array $users;
}

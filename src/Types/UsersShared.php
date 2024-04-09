<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about the users whose identifiers
 * were shared with the bot using a <a
 * href="#keyboardbuttonrequestusers">KeyboardButtonRequestUsers</a>
 * button.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class UsersShared extends TelegramType implements TypesInterface
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

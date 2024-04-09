<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a list of boosts added to a chat by a user.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class UserChatBoosts extends TelegramType implements TypesInterface
{
    /**
     * The list of boosts added to the chat by the user
     *
     * @var array<ChatBoost>
     */
    public array $boosts;
}

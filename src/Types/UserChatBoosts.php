<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a list of boosts added to a chat by a user.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class UserChatBoosts extends TelegramType implements TelegramTypeInterface
{
    /**
     * The list of boosts added to the chat by the user
     *
     * @var array<ChatBoost>
     */
    public array $boosts;
}

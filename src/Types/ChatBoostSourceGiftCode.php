<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes
 * to boost a chat. Each such code boosts the chat 4 times for the
 * duration of the corresponding Telegram Premium subscription.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatBoostSourceGiftCode extends TelegramType implements TelegramTypeInterface
{
    /** Source of the boost, always “gift_code” */
    public string $source;

    /** User for which the gift code was created */
    public User $user;
}

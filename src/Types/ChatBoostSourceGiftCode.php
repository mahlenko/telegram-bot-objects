<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes
 * to boost a chat. Each such code boosts the chat 4 times for the
 * duration of the corresponding Telegram Premium subscription.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ChatBoostSourceGiftCode extends TelegramType implements TypesInterface
{
    /** Source of the boost, always “gift_code” */
    public string $source;

    /** User for which the gift code was created */
    public User $user;
}

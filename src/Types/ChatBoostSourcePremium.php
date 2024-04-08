<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * The boost was obtained by subscribing to Telegram Premium or by
 * gifting a Telegram Premium subscription to another user.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatBoostSourcePremium extends TelegramType implements TypesInterface
{
    /** Source of the boost, always “premium” */
    public string $source;

    /** User that boosted the chat */
    public User $user;
}

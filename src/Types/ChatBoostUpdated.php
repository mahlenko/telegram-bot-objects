<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a boost added to a chat or changed.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatBoostUpdated extends TelegramType implements TypesInterface
{
    /** Chat which was boosted */
    public Chat $chat;

    /** Information about the chat boost */
    public ChatBoost $boost;
}

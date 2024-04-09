<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a boost added to a chat or changed.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ChatBoostUpdated extends TelegramType implements TypesInterface
{
    /** Chat which was boosted */
    public Chat $chat;

    /** Information about the chat boost */
    public ChatBoost $boost;
}

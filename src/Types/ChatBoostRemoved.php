<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a boost removed from a chat.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ChatBoostRemoved extends TelegramType implements TypesInterface
{
    /** Chat which was boosted */
    public Chat $chat;

    /** Unique identifier of the boost */
    public string $boost_id;

    /** Point in time (Unix timestamp) when the boost was removed */
    public int $remove_date;

    /** Source of the removed boost */
    public ChatBoostSource $source;
}

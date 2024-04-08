<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about a chat boost.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatBoost extends TelegramType implements TelegramTypeInterface
{
    /** Unique identifier of the boost */
    public string $boost_id;

    /** Point in time (Unix timestamp) when the chat was boosted */
    public int $add_date;

    /**
     * Point in time (Unix timestamp) when the boost will automatically
     * expire, unless the booster's Telegram Premium subscription is
     * prolonged
     */
    public int $expiration_date;

    /** Source of the added boost */
    public ChatBoostSource $source;
}

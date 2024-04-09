<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about a chat boost.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ChatBoost extends TelegramType implements TypesInterface
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

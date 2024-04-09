<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * The reaction is based on a custom emoji.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ReactionTypeCustomEmoji extends TelegramType implements TypesInterface
{
    /** Type of the reaction, always “custom_emoji” */
    public string $type;

    /** Custom emoji identifier */
    public string $custom_emoji_id;
}

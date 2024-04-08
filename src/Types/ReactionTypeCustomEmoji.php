<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * The reaction is based on a custom emoji.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ReactionTypeCustomEmoji extends TelegramType implements TypesInterface
{
    /** Type of the reaction, always “custom_emoji” */
    public string $type;

    /** Custom emoji identifier */
    public string $custom_emoji_id;
}

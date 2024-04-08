<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * The reaction is based on an emoji.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ReactionTypeEmoji extends TelegramType implements TelegramTypeInterface
{
    /** Type of the reaction, always “emoji” */
    public string $type;

    /**
     * Reaction emoji. Currently, it can be one of "", "", "", "", "", "",
     * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
     * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
     * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
     * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""
     */
    public string $emoji;
}

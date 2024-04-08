<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * Represents a reaction added to a message along with the number of
 * times it was added.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ReactionCount extends TelegramType implements TelegramTypeInterface
{
    /** Type of the reaction */
    public ReactionType $type;

    /** Number of times the reaction was added */
    public int $total_count;
}

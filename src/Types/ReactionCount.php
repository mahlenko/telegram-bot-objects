<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents a reaction added to a message along with the number of
 * times it was added.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ReactionCount extends TelegramType implements TypesInterface
{
    /** Type of the reaction */
    public ReactionType $type;

    /** Number of times the reaction was added */
    public int $total_count;
}

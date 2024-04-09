<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about one answer option in a poll.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class PollOption extends TelegramType implements TypesInterface
{
    /** Option text, 1-100 characters */
    public string $text;

    /** Number of users that voted for this option */
    public int $voter_count;
}

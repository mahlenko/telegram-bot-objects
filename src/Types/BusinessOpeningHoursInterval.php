<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BusinessOpeningHoursInterval extends TelegramType implements TypesInterface
{
    /**
     * The minute's sequence number in a week, starting on Monday, marking
     * the start of the time interval during which the business is open; 0 -
     * 7 * 24 * 60
     */
    public int $opening_minute;

    /**
     * The minute's sequence number in a week, starting on Monday, marking
     * the end of the time interval during which the business is open; 0 - 8
     * * 24 * 60
     */
    public int $closing_minute;
}

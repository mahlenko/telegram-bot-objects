<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class BusinessOpeningHours extends TelegramType implements TypesInterface
{
    /** Unique name of the time zone for which the opening hours are defined */
    public string $time_zone_name;

    /**
     * List of time intervals describing business opening hours
     *
     * @var array<BusinessOpeningHoursInterval>
     */
    public array $opening_hours;
}

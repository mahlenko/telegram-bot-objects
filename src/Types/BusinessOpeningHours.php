<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BusinessOpeningHours extends TelegramType implements TelegramTypeInterface
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

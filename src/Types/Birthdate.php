<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Birthdate extends TelegramType implements TelegramTypeInterface
{
    /** Day of the user's birth; 1-31 */
    public int $day;

    /** Month of the user's birth; 1-12 */
    public int $month;

    /** Optional. Year of the user's birth */
    public ?int $year;
}

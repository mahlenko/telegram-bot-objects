<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class Birthdate extends TelegramType implements TypesInterface
{
    /** Day of the user's birth; 1-31 */
    public int $day;

    /** Month of the user's birth; 1-12 */
    public int $month;

    /** Optional. Year of the user's birth */
    public ?int $year;
}

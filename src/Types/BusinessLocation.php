<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class BusinessLocation extends TelegramType implements TypesInterface
{
    /** Address of the business */
    public string $address;

    /** Optional. Location of the business */
    public ?Location $location;
}

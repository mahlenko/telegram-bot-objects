<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BusinessLocation extends TelegramType implements TypesInterface
{
    /** Address of the business */
    public string $address;

    /** Optional. Location of the business */
    public ?Location $location;
}

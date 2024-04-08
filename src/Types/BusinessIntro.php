<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BusinessIntro extends TelegramType implements TypesInterface
{
    /** Optional. Title text of the business intro */
    public ?string $title;

    /** Optional. Message text of the business intro */
    public ?string $message;

    /** Optional. Sticker of the business intro */
    public ?Sticker $sticker;
}

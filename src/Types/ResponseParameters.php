<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Describes why a request was unsuccessful.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ResponseParameters extends TelegramType implements TypesInterface
{
    /**
     * Optional. The group has been migrated to a supergroup with the
     * specified identifier. This number may have more than 32 significant
     * bits and some programming languages may have difficulty/silent defects
     * in interpreting it. But it has at most 52 significant bits, so a
     * signed 64-bit integer or double-precision float type are safe for
     * storing this identifier.
     */
    public ?int $migrate_to_chat_id;

    /**
     * Optional. In case of exceeding flood control, the number of seconds
     * left to wait before the request can be repeated
     */
    public ?int $retry_after;
}

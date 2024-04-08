<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramType;

/**
 * Represents an issue in one of the data fields that was provided by the
 * user. The error is considered resolved when the field's value changes.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PassportElementErrorDataField extends TelegramType implements TelegramPassportInterface
{
    /** Error source, must be data */
    public string $source;

    /**
     * The section of the user's Telegram Passport which has the error, one
     * of “personal_details”, “passport”, “driver_license”,
     * “identity_card”, “internal_passport”, “address”
     */
    public string $type;

    /** Name of the data field which has the error */
    public string $field_name;

    /** Base64-encoded data hash */
    public string $data_hash;

    /** Error message */
    public string $message;
}

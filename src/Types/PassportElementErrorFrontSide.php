<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramType;

/**
 * Represents an issue with the front side of a document. The error is
 * considered resolved when the file with the front side of the document
 * changes.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class PassportElementErrorFrontSide extends TelegramType implements TelegramPassportInterface
{
    /** Error source, must be front_side */
    public string $source;

    /**
     * The section of the user's Telegram Passport which has the issue, one
     * of “passport”, “driver_license”, “identity_card”,
     * “internal_passport”
     */
    public string $type;

    /** Base64-encoded hash of the file with the front side of the document */
    public string $file_hash;

    /** Error message */
    public string $message;
}

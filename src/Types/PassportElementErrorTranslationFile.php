<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramType;

/**
 * Represents an issue with one of the files that constitute the
 * translation of a document. The error is considered resolved when the
 * file changes.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class PassportElementErrorTranslationFile extends TelegramType implements TelegramPassportInterface
{
    /** Error source, must be translation_file */
    public string $source;

    /**
     * Type of element of the user's Telegram Passport which has the issue,
     * one of “passport”, “driver_license”, “identity_card”,
     * “internal_passport”, “utility_bill”, “bank_statement”,
     * “rental_agreement”, “passport_registration”,
     * “temporary_registration”
     */
    public string $type;

    /** Base64-encoded file hash */
    public string $file_hash;

    /** Error message */
    public string $message;
}

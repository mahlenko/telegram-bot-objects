<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramPassportInterface;
use TelegramBot\TelegramType;

/**
 * Represents an issue with a document scan. The error is considered
 * resolved when the file with the document scan changes.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class PassportElementErrorFile extends TelegramType implements TelegramPassportInterface
{
    /** Error source, must be file */
    public string $source;

    /**
     * The section of the user's Telegram Passport which has the issue, one
     * of “utility_bill”, “bank_statement”, “rental_agreement”,
     * “passport_registration”, “temporary_registration”
     */
    public string $type;

    /** Base64-encoded file hash */
    public string $file_hash;

    /** Error message */
    public string $message;
}

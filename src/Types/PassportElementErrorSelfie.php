<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * PassportElementErrorSelfie
 *
 * Represents an issue with the selfie with a document. The error is considered
 * resolved when the file with the selfie changes.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class PassportElementErrorSelfie implements TelegramTypeInterface
{
    public function __construct(
        /** Error source, must be selfie */
        public string $source,
        /**
         * The section of the user's Telegram Passport which has the issue, one
         * of “passport”, “driver_license”, “identity_card”,
         * “internal_passport”
         */
        public string $type,
        /** Base64-encoded hash of the file with the selfie */
        public string $file_hash,
        /** Error message */
        public string $message,
    ) {
    }
}

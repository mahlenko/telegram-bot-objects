<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * PassportElementErrorTranslationFile
 *
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class PassportElementErrorTranslationFile implements TelegramTypeInterface
{
	public function __construct(
		/** Error source, must be translation_file */
		public ?string $source,
		/** Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration” */
		public ?string $type,
		/** Base64-encoded file hash */
		public ?string $file_hash,
		/** Error message */
		public ?string $message,
	) {
	}
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * PassportElementErrorFrontSide
 *
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class PassportElementErrorFrontSide implements TelegramTypeInterface
{
	public function __construct(
		/** Error source, must be front_side */
		public string $source,
		/** The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport” */
		public string $type,
		/** Base64-encoded hash of the file with the front side of the document */
		public string $file_hash,
		/** Error message */
		public string $message,
	) {
	}
}

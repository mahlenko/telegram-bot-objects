<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * Document
 *
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class Document implements TelegramTypeInterface
{
	public function __construct(
		/** Identifier for this file, which can be used to download or reuse the file */
		public string $file_id,
		/** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
		public string $file_unique_id,
		/** Document thumbnail as defined by sender */
		public ?PhotoSize $thumbnail,
		/** Original filename as defined by sender */
		public ?string $file_name,
		/** MIME type of the file as defined by sender */
		public ?string $mime_type,
		/** File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
		public ?int $file_size,
	) {
	}
}

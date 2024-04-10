<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InputMediaVideo
 *
 * Represents a video to be sent.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InputMediaVideo implements TelegramTypeInterface
{
	public function __construct(
		/** Type of the result, must be video */
		public string $type,
		/** File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files » */
		public string $media,
		/** Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files » */
		public InputFile|string|null $thumbnail,
		/** Caption of the video to be sent, 0-1024 characters after entities parsing */
		public ?string $caption,
		/** Mode for parsing entities in the video caption. See formatting options for more details. */
		public ?string $parse_mode,
		/**
		 * List of special entities that appear in the caption, which can be specified instead of parse_mode
		 * @var array<MessageEntity>
		 */
		public ?array $caption_entities,
		/** Video width */
		public ?int $width,
		/** Video height */
		public ?int $height,
		/** Video duration in seconds */
		public ?int $duration,
		/** Pass True if the uploaded video is suitable for streaming */
		public ?bool $supports_streaming,
		/** Pass True if the video needs to be covered with a spoiler animation */
		public ?bool $has_spoiler,
	) {
	}
}

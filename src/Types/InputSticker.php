<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InputSticker
 *
 * This object describes a sticker to be added to a sticker set.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InputSticker implements TelegramTypeInterface
{
	public function __construct(
		/** The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, upload a new one using multipart/form-data, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files » */
		public InputFile|string|null $sticker,
		/** Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a WEBM video */
		public ?string $format,
		/**
		 * List of 1-20 emoji associated with the sticker
		 * @var array<string>
		 */
		public ?array $emoji_list,
		/** Position where the mask should be placed on faces. For “mask” stickers only. */
		public MaskPosition $mask_position,
		/**
		 * List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
		 * @var array<string>
		 */
		public array $keywords,
	) {
	}
}

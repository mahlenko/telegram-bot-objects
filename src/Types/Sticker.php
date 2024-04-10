<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * Sticker
 *
 * This object represents a sticker.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class Sticker implements TelegramTypeInterface
{
	public function __construct(
		/** Identifier for this file, which can be used to download or reuse the file */
		public ?string $file_id,
		/** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
		public ?string $file_unique_id,
		/** Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video. */
		public ?string $type,
		/** Sticker width */
		public ?int $width,
		/** Sticker height */
		public ?int $height,
		/** True, if the sticker is animated */
		public ?bool $is_animated,
		/** True, if the sticker is a video sticker */
		public ?bool $is_video,
		/** Sticker thumbnail in the .WEBP or .JPG format */
		public PhotoSize $thumbnail,
		/** Emoji associated with the sticker */
		public string $emoji,
		/** Name of the sticker set to which the sticker belongs */
		public string $set_name,
		/** For premium regular stickers, premium animation for the sticker */
		public File $premium_animation,
		/** For mask stickers, the position where the mask should be placed */
		public MaskPosition $mask_position,
		/** For custom emoji stickers, unique identifier of the custom emoji */
		public string $custom_emoji_id,
		/** True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places */
		public true $needs_repainting,
		/** File size in bytes */
		public int $file_size,
	) {
	}
}

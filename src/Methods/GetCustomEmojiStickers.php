<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\Sticker;
use TelegramBotCast\Types\string;

/**
 * GetCustomEmojiStickers
 *
 * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of Sticker objects.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetCustomEmojiStickers implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = [Sticker::class];

	public function __construct(
		/**
		 * A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
		 * @var array<string>
		 */
		public ?array $custom_emoji_ids,
	) {
	}
}

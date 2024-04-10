<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * StickerSet
 *
 * This object represents a sticker set.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class StickerSet implements TelegramTypeInterface
{
    public function __construct(
        /** Sticker set name */
        public string $name,
        /** Sticker set title */
        public string $title,
        /** Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji” */
        public string $sticker_type,
        /**
         * List of all set stickers
         * @var array<Sticker>
         */
        public array $stickers,
        /** Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format */
        public ?PhotoSize $thumbnail,
    ) {
    }
}

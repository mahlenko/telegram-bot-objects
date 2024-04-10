<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\StickerSet;

/**
 * GetStickerSet
 *
 * Use this method to get a sticker set. On success, a StickerSet object is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetStickerSet implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = StickerSet::class;

    public function __construct(
        /** Name of the sticker set */
        public ?string $name,
    ) {
    }
}

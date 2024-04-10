<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * SetStickerSetTitle
 *
 * Use this method to set the title of a created sticker set. Returns True on
 * success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SetStickerSetTitle implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** Sticker set name */
        public string $name,
        /** Sticker set title, 1-64 characters */
        public string $title,
    ) {
    }
}

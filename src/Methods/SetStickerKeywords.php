<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * SetStickerKeywords
 *
 * Use this method to change search keywords assigned to a regular or custom emoji
 * sticker. The sticker must belong to a sticker set created by the bot. Returns
 * True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SetStickerKeywords implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
        /**
         * A JSON-serialized list of 0-20 search keywords for the sticker with total length
         * of up to 64 characters
         * @var array<string>
         */
        public ?array $keywords,
    ) {
    }
}

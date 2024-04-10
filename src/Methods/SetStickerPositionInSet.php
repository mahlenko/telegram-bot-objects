<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * SetStickerPositionInSet
 *
 * Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SetStickerPositionInSet implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** File identifier of the sticker */
        public ?string $sticker,
        /** New sticker position in the set, zero-based */
        public ?int $position,
    ) {
    }
}

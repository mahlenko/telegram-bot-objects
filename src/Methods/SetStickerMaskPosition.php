<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\MaskPosition;

/**
 * SetStickerMaskPosition
 *
 * Use this method to change the mask position of a mask sticker. The sticker must
 * belong to a sticker set that was created by the bot. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SetStickerMaskPosition implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
        /**
         * A JSON-serialized object with the position where the mask should be placed on
         * faces. Omit the parameter to remove the mask position.
         */
        public ?MaskPosition $mask_position,
    ) {
    }
}

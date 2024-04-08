<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InputSticker;

/**
 * Use this method to replace an existing sticker in a sticker set with a
 * new one. The method is equivalent to calling deleteStickerFromSet,
 * then addStickerToSet, then setStickerPositionInSet. Returns True on
 * success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ReplaceStickerInSet extends TelegramMethod implements StickersInterface
{
    /** User identifier of the sticker set owner */
    public int $user_id;

    /** Sticker set name */
    public string $name;

    /** File identifier of the replaced sticker */
    public string $old_sticker;

    /**
     * A JSON-serialized object with information about the added sticker. If
     * exactly the same sticker had already been added to the set, then the
     * set remains unchanged.
     */
    public InputSticker $sticker;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['user_id', 'name', 'old_sticker', 'sticker'];
}

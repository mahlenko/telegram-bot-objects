<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\StickerSet;

/**
 * Use this method to get a sticker set. On success, a <a
 * href="#stickerset">StickerSet</a> object is returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetStickerSet extends TelegramMethod implements StickersInterface
{
    /** Name of the sticker set */
    public string $name;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['name'];

    /** Response mapping type. */
    public string $response_type = StickerSet::class;
}

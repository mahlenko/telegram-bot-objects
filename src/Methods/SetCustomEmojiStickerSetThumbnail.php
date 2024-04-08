<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to set the thumbnail of a custom emoji sticker set.
 * Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetCustomEmojiStickerSetThumbnail extends TelegramMethod implements StickersInterface
{
    /** Sticker set name */
    public string $name;

    /**
     * Custom emoji identifier of a sticker from the sticker set; pass an
     * empty string to drop the thumbnail and use the first sticker as the
     * thumbnail.
     */
    public ?string $custom_emoji_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['name'];
}

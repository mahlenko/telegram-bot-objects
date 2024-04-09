<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to set the thumbnail of a custom emoji sticker set.
 * Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetCustomEmojiStickerSetThumbnail extends TelegramMethod implements StickersInterface
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

    /** Response mapping type. */
    public string $response_type = 'bool';
}

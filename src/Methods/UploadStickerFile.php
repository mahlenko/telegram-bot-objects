<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InputFile;

/**
 * Use this method to upload a file with a sticker for later use in the
 * createNewStickerSet, addStickerToSet, or replaceStickerInSet methods
 * (the file can be used multiple times). Returns the uploaded File on
 * success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class UploadStickerFile extends TelegramMethod implements StickersInterface
{
    /** User identifier of sticker file owner */
    public int $user_id;

    /**
     * A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See
     * https://core.telegram.org/stickers for technical requirements. More
     * information on Sending Files »
     */
    public InputFile $sticker;

    /**
     * Format of the sticker, must be one of “static”, “animated”,
     * “video”
     */
    public string $sticker_format;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['user_id', 'sticker', 'sticker_format'];
}

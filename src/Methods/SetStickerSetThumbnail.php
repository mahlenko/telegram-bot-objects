<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\StickersInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InputFile;

/**
 * Use this method to set the thumbnail of a regular or mask sticker set.
 * The format of the thumbnail file must match the format of the stickers
 * in the set. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetStickerSetThumbnail extends TelegramMethod implements StickersInterface
{
    /** Sticker set name */
    public string $name;

    /** User identifier of the sticker set owner */
    public int $user_id;

    /**
     * A .WEBP or .PNG image with the thumbnail, must be up to 128 kilobytes
     * in size and have a width and height of exactly 100px, or a .TGS
     * animation with a thumbnail up to 32 kilobytes in size (see
     * https://core.telegram.org/stickers#animated-sticker-requirements for
     * animated sticker technical requirements), or a WEBM video with the
     * thumbnail up to 32 kilobytes in size; see
     * https://core.telegram.org/stickers#video-sticker-requirements for
     * video sticker technical requirements. Pass a file_id as a String to
     * send a file that already exists on the Telegram servers, pass an HTTP
     * URL as a String for Telegram to get a file from the Internet, or
     * upload a new one using multipart/form-data. More information on
     * Sending Files ». Animated and video sticker set thumbnails can't be
     * uploaded via HTTP URL. If omitted, then the thumbnail is dropped and
     * the first sticker is used as the thumbnail.
     */
    public InputFile|string|null $thumbnail;

    /**
     * Format of the thumbnail, must be one of “static” for a .WEBP or
     * .PNG image, “animated” for a .TGS animation, or “video” for a
     * WEBM video
     */
    public string $format;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['name', 'user_id', 'format'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

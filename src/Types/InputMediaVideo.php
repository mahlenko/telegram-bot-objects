<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents a video to be sent.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class InputMediaVideo extends TelegramType implements TypesInterface
{
    /** Type of the result, must be video */
    public string $type;

    /**
     * File to send. Pass a file_id to send a file that exists on the
     * Telegram servers (recommended), pass an HTTP URL for Telegram to get a
     * file from the Internet, or pass “attach://<file_attach_name>” to
     * upload a new one using multipart/form-data under <file_attach_name>
     * name. More information on Sending Files »
     */
    public string $media;

    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail
     * generation for the file is supported server-side. The thumbnail should
     * be in JPEG format and less than 200 kB in size. A thumbnail's width
     * and height should not exceed 320. Ignored if the file is not uploaded
     * using multipart/form-data. Thumbnails can't be reused and can be only
     * uploaded as a new file, so you can pass
     * “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More information on
     * Sending Files »
     */
    public InputFile|string|null $thumbnail;

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after
     * entities parsing
     */
    public ?string $caption;

    /**
     * Optional. Mode for parsing entities in the video caption. See
     * formatting options for more details.
     */
    public ?string $parse_mode;

    /**
     * Optional. List of special entities that appear in the caption, which
     * can be specified instead of parse_mode
     *
     * @var array<MessageEntity>
     */
    public ?array $caption_entities;

    /** Optional. Video width */
    public ?int $width;

    /** Optional. Video height */
    public ?int $height;

    /** Optional. Video duration in seconds */
    public ?int $duration;

    /** Optional. Pass True if the uploaded video is suitable for streaming */
    public ?bool $supports_streaming;

    /**
     * Optional. Pass True if the video needs to be covered with a spoiler
     * animation
     */
    public ?bool $has_spoiler;
}

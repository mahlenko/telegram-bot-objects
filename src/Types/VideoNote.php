<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a <a
 * href="https://telegram.org/blog/video-messages-and-telescope">video
 * message</a> (available in Telegram apps as of <a
 * href="https://telegram.org/blog/video-messages-and-telescope">v.4.0</a>).
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class VideoNote extends TelegramType implements TypesInterface
{
    /**
     * Identifier for this file, which can be used to download or reuse the
     * file
     */
    public string $file_id;

    /**
     * Unique identifier for this file, which is supposed to be the same over
     * time and for different bots. Can't be used to download or reuse the
     * file.
     */
    public string $file_unique_id;

    /**
     * Video width and height (diameter of the video message) as defined by
     * sender
     */
    public int $length;

    /** Duration of the video in seconds as defined by sender */
    public int $duration;

    /** Optional. Video thumbnail */
    public ?PhotoSize $thumbnail;

    /** Optional. File size in bytes */
    public ?int $file_size;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents an audio file to be treated as music by the
 * Telegram clients.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Audio extends TelegramType implements TypesInterface
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

    /** Duration of the audio in seconds as defined by sender */
    public int $duration;

    /** Optional. Performer of the audio as defined by sender or by audio tags */
    public ?string $performer;

    /** Optional. Title of the audio as defined by sender or by audio tags */
    public ?string $title;

    /** Optional. Original filename as defined by sender */
    public ?string $file_name;

    /** Optional. MIME type of the file as defined by sender */
    public ?string $mime_type;

    /**
     * Optional. File size in bytes. It can be bigger than 2^31 and some
     * programming languages may have difficulty/silent defects in
     * interpreting it. But it has at most 52 significant bits, so a signed
     * 64-bit integer or double-precision float type are safe for storing
     * this value.
     */
    public ?int $file_size;

    /** Optional. Thumbnail of the album cover to which the music file belongs */
    public ?PhotoSize $thumbnail;
}

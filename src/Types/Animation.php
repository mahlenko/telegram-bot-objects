<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * Animation
 *
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without
 * sound).
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class Animation implements TelegramTypeInterface
{
    public function __construct(
        /** Identifier for this file, which can be used to download or reuse the file */
        public string $file_id,
        /**
         * Unique identifier for this file, which is supposed to be the same over time and
         * for different bots. Can't be used to download or reuse the file.
         */
        public string $file_unique_id,
        /** Video width as defined by sender */
        public int $width,
        /** Video height as defined by sender */
        public int $height,
        /** Duration of the video in seconds as defined by sender */
        public int $duration,
        /** Animation thumbnail as defined by sender */
        public ?PhotoSize $thumbnail,
        /** Original animation filename as defined by sender */
        public ?string $file_name,
        /** MIME type of the file as defined by sender */
        public ?string $mime_type,
        /**
         * File size in bytes. It can be bigger than 2^31 and some programming languages
         * may have difficulty/silent defects in interpreting it. But it has at most 52
         * significant bits, so a signed 64-bit integer or double-precision float type are
         * safe for storing this value.
         */
        public ?int $file_size,
    ) {
    }
}

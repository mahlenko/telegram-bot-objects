<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a file ready to be downloaded. The file can be
 * downloaded via the link
 * <code>https://api.telegram.org/file/bot&lt;token&gt;/&lt;file_path&gt;</code>.
 * It is guaranteed that the link will be valid for at least 1 hour. When
 * the link expires, a new one can be requested by calling <a
 * href="#getfile">getFile</a>.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class File extends TelegramType implements TypesInterface
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
     * Optional. File size in bytes. It can be bigger than 2^31 and some
     * programming languages may have difficulty/silent defects in
     * interpreting it. But it has at most 52 significant bits, so a signed
     * 64-bit integer or double-precision float type are safe for storing
     * this value.
     */
    public ?int $file_size;

    /**
     * Optional. File path. Use
     * https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     */
    public ?string $file_path;
}

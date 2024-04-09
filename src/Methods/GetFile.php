<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\File;

/**
 * Use this method to get basic information about a file and prepare it
 * for downloading. For the moment, bots can download files of up to 20MB
 * in size. On success, a <a href="#file">File</a> object is returned.
 * The file can then be downloaded via the link
 * <code>https://api.telegram.org/file/bot&lt;token&gt;/&lt;file_path&gt;</code>,
 * where <code>&lt;file_path&gt;</code> is taken from the response. It is
 * guaranteed that the link will be valid for at least 1 hour. When the
 * link expires, a new one can be requested by calling <a
 * href="#getfile">getFile</a> again.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetFile extends TelegramMethod implements MethodsInterface
{
    /** File identifier to get information about */
    public string $file_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['file_id'];

    /** Response mapping type. */
    public string $response_type = File::class;
}

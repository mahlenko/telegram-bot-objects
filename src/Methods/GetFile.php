<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to get basic information about a file and prepare it
 * for downloading. For the moment, bots can download files of up to 20MB
 * in size. On success, a File object is returned. The file can then be
 * downloaded via the link
 * https://api.telegram.org/file/bot<token>/<file_path>, where
 * <file_path> is taken from the response. It is guaranteed that the link
 * will be valid for at least 1 hour. When the link expires, a new one
 * can be requested by calling getFile again.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetFile extends TelegramMethod implements MethodsInterface
{
    /** File identifier to get information about */
    public string $file_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['file_id'];
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents the contents of a file to be uploaded. Must be
 * posted using multipart/form-data in the usual way that files are
 * uploaded via the browser.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputFile extends TelegramType implements TypesInterface
{
}

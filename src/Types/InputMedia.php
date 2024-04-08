<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents the content of a media message to be sent. It
 * should be one of
 *
 * InputMediaAnimation
 * InputMediaDocument
 * InputMediaAudio
 * InputMediaPhoto
 * InputMediaVideo
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputMedia extends TelegramType implements TelegramTypeInterface
{
}

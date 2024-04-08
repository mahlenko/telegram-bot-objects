<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about a video chat ended in
 * the chat.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class VideoChatEnded extends TelegramType implements TelegramTypeInterface
{
    /** Video chat duration in seconds */
    public int $duration;
}

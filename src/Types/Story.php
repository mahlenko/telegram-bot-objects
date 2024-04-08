<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a story.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Story extends TelegramType implements TelegramTypeInterface
{
    /** Chat that posted the story */
    public Chat $chat;

    /** Unique identifier for the story in the chat */
    public int $id;
}

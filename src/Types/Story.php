<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a story.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class Story extends TelegramType implements TypesInterface
{
    /** Chat that posted the story */
    public Chat $chat;

    /** Unique identifier for the story in the chat */
    public int $id;
}

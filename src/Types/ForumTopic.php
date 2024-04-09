<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a forum topic.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ForumTopic extends TelegramType implements TypesInterface
{
    /** Unique identifier of the forum topic */
    public int $message_thread_id;

    /** Name of the topic */
    public string $name;

    /** Color of the topic icon in RGB format */
    public int $icon_color;

    /**
     * Optional. Unique identifier of the custom emoji shown as the topic
     * icon
     */
    public ?string $icon_custom_emoji_id;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about an edited forum topic.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ForumTopicEdited extends TelegramType implements TypesInterface
{
    /** Optional. New name of the topic, if it was edited */
    public ?string $name;

    /**
     * Optional. New identifier of the custom emoji shown as the topic icon,
     * if it was edited; an empty string if the icon was removed
     */
    public ?string $icon_custom_emoji_id;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to edit name and icon of a topic in a forum supergroup
 * chat. The bot must be an administrator in the chat for this to work
 * and must have can_manage_topics administrator rights, unless it is the
 * creator of the topic. Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class EditForumTopic extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** Unique identifier for the target message thread of the forum topic */
    public int $message_thread_id;

    /**
     * New topic name, 0-128 characters. If not specified or empty, the
     * current name of the topic will be kept
     */
    public ?string $name;

    /**
     * New unique identifier of the custom emoji shown as the topic icon. Use
     * getForumTopicIconStickers to get all allowed custom emoji identifiers.
     * Pass an empty string to remove the icon. If not specified, the current
     * icon will be kept
     */
    public ?string $icon_custom_emoji_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'message_thread_id'];
}

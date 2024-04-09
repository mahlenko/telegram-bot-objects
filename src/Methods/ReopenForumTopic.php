<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to reopen a closed topic in a forum supergroup chat.
 * The bot must be an administrator in the chat for this to work and must
 * have the <em>can_manage_topics</em> administrator rights, unless it is
 * the creator of the topic. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ReopenForumTopic extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** Unique identifier for the target message thread of the forum topic */
    public int $message_thread_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'message_thread_id'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

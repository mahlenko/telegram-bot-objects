<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to forward multiple messages of any kind. If some of
 * the specified messages can't be found or forwarded, they are skipped.
 * Service messages and messages with protected content can't be
 * forwarded. Album grouping is kept for forwarded messages. On success,
 * an array of MessageId of the sent messages is returned.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ForwardMessages extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * Unique identifier for the target message thread (topic) of the forum;
     * for forum supergroups only
     */
    public ?int $message_thread_id;

    /**
     * Unique identifier for the chat where the original messages were sent
     * (or channel username in the format @channelusername)
     */
    public int|string $from_chat_id;

    /**
     * A JSON-serialized list of 1-100 identifiers of messages in the chat
     * from_chat_id to forward. The identifiers must be specified in a
     * strictly increasing order.
     *
     * @var array<int>
     */
    public array $message_ids;

    /**
     * Sends the messages silently. Users will receive a notification with no
     * sound.
     */
    public ?bool $disable_notification;

    /**
     * Protects the contents of the forwarded messages from forwarding and
     * saving
     */
    public ?bool $protect_content;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'from_chat_id', 'message_ids'];
}

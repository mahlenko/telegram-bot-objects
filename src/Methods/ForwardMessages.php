<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\MessageId;

/**
 * Use this method to forward multiple messages of any kind. If some of
 * the specified messages can't be found or forwarded, they are skipped.
 * Service messages and messages with protected content can't be
 * forwarded. Album grouping is kept for forwarded messages. On success,
 * an array of <a href="#messageid">MessageId</a> of the sent messages is
 * returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ForwardMessages extends TelegramMethod implements MethodsInterface
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

    /**
     * Response mapping type.
     * @var array<MessageId>
     */
    public array $response_type = [MessageId::class];
}

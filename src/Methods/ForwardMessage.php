<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\Message;

/**
 * Use this method to forward messages of any kind. Service messages and
 * messages with protected content can't be forwarded. On success, the
 * sent <a href="#message">Message</a> is returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ForwardMessage extends TelegramMethod implements MethodsInterface
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
     * Unique identifier for the chat where the original message was sent (or
     * channel username in the format @channelusername)
     */
    public int|string $from_chat_id;

    /**
     * Sends the message silently. Users will receive a notification with no
     * sound.
     */
    public ?bool $disable_notification;

    /**
     * Protects the contents of the forwarded message from forwarding and
     * saving
     */
    public ?bool $protect_content;

    /** Message identifier in the chat specified in from_chat_id */
    public int $message_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'from_chat_id', 'message_id'];

    /** Response mapping type. */
    public string $response_type = Message::class;
}

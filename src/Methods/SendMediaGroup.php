<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InputMedia;
use TelegramBot\Types\Message;
use TelegramBot\Types\ReplyParameters;

/**
 * Use this method to send a group of photos, videos, documents or audios
 * as an album. Documents and audio files can be only grouped in an album
 * with messages of the same type. On success, an array of <a
 * href="#message">Messages</a> that were sent is returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SendMediaGroup extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier of the business connection on behalf of which the
     * message will be sent
     */
    public ?string $business_connection_id;

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
     * A JSON-serialized array describing messages to be sent, must include
     * 2-10 items
     *
     * @var array<InputMedia>
     */
    public array $media;

    /**
     * Sends messages silently. Users will receive a notification with no
     * sound.
     */
    public ?bool $disable_notification;

    /** Protects the contents of the sent messages from forwarding and saving */
    public ?bool $protect_content;

    /** Description of the message to reply to */
    public ?ReplyParameters $reply_parameters;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'media'];

    /**
     * Response mapping type.
     * @var array<Message>
     */
    public array $response_type = [Message::class];
}

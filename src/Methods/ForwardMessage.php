<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\Message;

/**
 * ForwardMessage
 *
 * Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ForwardMessage implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = Message::class;

    public function __construct(
        /** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
        public int|string|null $chat_id,
        /** Unique identifier for the target message thread (topic) of the forum; for forum supergroups only */
        public int $message_thread_id,
        /** Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername) */
        public int|string|null $from_chat_id,
        /** Sends the message silently. Users will receive a notification with no sound. */
        public bool $disable_notification,
        /** Protects the contents of the forwarded message from forwarding and saving */
        public bool $protect_content,
        /** Message identifier in the chat specified in from_chat_id */
        public ?int $message_id,
    ) {
    }
}

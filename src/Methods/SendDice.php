<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ForceReply;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\Message;
use TelegramBotCast\Types\ReplyKeyboardMarkup;
use TelegramBotCast\Types\ReplyKeyboardRemove;
use TelegramBotCast\Types\ReplyParameters;

/**
 * SendDice
 *
 * Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SendDice implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = Message::class;

    public function __construct(
        /** Unique identifier of the business connection on behalf of which the message will be sent */
        public string $business_connection_id,
        /** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
        public int|string|null $chat_id,
        /** Unique identifier for the target message thread (topic) of the forum; for forum supergroups only */
        public int $message_thread_id,
        /** Emoji on which the dice throw animation is based. Currently, must be one of “”, “”, “”, “”, “”, or “”. Dice can have values 1-6 for “”, “” and “”, values 1-5 for “” and “”, and values 1-64 for “”. Defaults to “” */
        public string $emoji,
        /** Sends the message silently. Users will receive a notification with no sound. */
        public bool $disable_notification,
        /** Protects the contents of the sent message from forwarding */
        public bool $protect_content,
        /** Description of the message to reply to */
        public ReplyParameters $reply_parameters,
        /** Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user. Not supported for messages sent on behalf of a business account */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup,
    ) {
    }
}

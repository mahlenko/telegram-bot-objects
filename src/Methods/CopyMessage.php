<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ForceReply;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\MessageEntity;
use TelegramBotCast\Types\MessageId;
use TelegramBotCast\Types\ReplyKeyboardMarkup;
use TelegramBotCast\Types\ReplyKeyboardRemove;
use TelegramBotCast\Types\ReplyParameters;

/**
 * CopyMessage
 *
 * Use this method to copy messages of any kind. Service messages, giveaway
 * messages, giveaway winners messages, and invoice messages can't be copied. A
 * quiz poll can be copied only if the value of the field correct_option_id is
 * known to the bot. The method is analogous to the method forwardMessage, but the
 * copied message doesn't have a link to the original message. Returns the
 * MessageId of the sent message on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class CopyMessage implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = MessageId::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         */
        public ?int $message_thread_id,
        /**
         * Unique identifier for the chat where the original message was sent (or channel
         * username in the format @channelusername)
         */
        public int|string $from_chat_id,
        /** Message identifier in the chat specified in from_chat_id */
        public int $message_id,
        /**
         * New caption for media, 0-1024 characters after entities parsing. If not
         * specified, the original caption is kept
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the new caption. See formatting options for more
         * details.
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the new caption, which
         * can be specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /** Sends the message silently. Users will receive a notification with no sound. */
        public ?bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /** Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard,
         * custom reply keyboard, instructions to remove reply keyboard or to force a reply
         * from the user.
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}

<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ForceReply;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\InputFile;
use TelegramBotCast\Types\Message;
use TelegramBotCast\Types\MessageEntity;
use TelegramBotCast\Types\ReplyKeyboardMarkup;
use TelegramBotCast\Types\ReplyKeyboardRemove;
use TelegramBotCast\Types\ReplyParameters;

/**
 * SendPhoto
 *
 * Use this method to send photos. On success, the sent Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SendPhoto implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = Message::class;

    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         */
        public string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         */
        public int|string|null $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         */
        public int $message_thread_id,
        /**
         * Photo to send. Pass a file_id as String to send a photo that exists on the
         * Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get
         * a photo from the Internet, or upload a new photo using multipart/form-data. The
         * photo must be at most 10 MB in size. The photo's width and height must not
         * exceed 10000 in total. Width and height ratio must be at most 20. More
         * information on Sending Files »
         */
        public InputFile|string|null $photo,
        /**
         * Photo caption (may also be used when resending photos by file_id), 0-1024
         * characters after entities parsing
         */
        public string $caption,
        /**
         * Mode for parsing entities in the photo caption. See formatting options for more
         * details.
         */
        public string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the caption, which can
         * be specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public array $caption_entities,
        /** Pass True if the photo needs to be covered with a spoiler animation */
        public bool $has_spoiler,
        /** Sends the message silently. Users will receive a notification with no sound. */
        public bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public bool $protect_content,
        /** Description of the message to reply to */
        public ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard,
         * custom reply keyboard, instructions to remove a reply keyboard or to force a
         * reply from the user. Not supported for messages sent on behalf of a business
         * account
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup,
    ) {
    }
}

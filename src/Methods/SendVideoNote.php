<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\ForceReply;
use TelegramBotCast\Types\InlineKeyboardMarkup;
use TelegramBotCast\Types\InputFile;
use TelegramBotCast\Types\Message;
use TelegramBotCast\Types\ReplyKeyboardMarkup;
use TelegramBotCast\Types\ReplyKeyboardRemove;
use TelegramBotCast\Types\ReplyParameters;

/**
 * SendVideoNote
 *
 * As of v.4.0, Telegram clients support rounded square MPEG4 videos of up to 1
 * minute long. Use this method to send video messages. On success, the sent
 * Message is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class SendVideoNote implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = Message::class;

    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         */
        public ?string $business_connection_id,
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
         * Video note to send. Pass a file_id as String to send a video note that exists on
         * the Telegram servers (recommended) or upload a new video using
         * multipart/form-data. More information on Sending Files ». Sending video notes
         * by a URL is currently unsupported
         */
        public InputFile|string $video_note,
        /** Duration of sent video in seconds */
        public ?int $duration,
        /** Video width and height, i.e. diameter of the video message */
        public ?int $length,
        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for the file
         * is supported server-side. The thumbnail should be in JPEG format and less than
         * 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if
         * the file is not uploaded using multipart/form-data. Thumbnails can't be reused
         * and can be only uploaded as a new file, so you can pass
         * “attach://<file_attach_name>” if the thumbnail was uploaded using
         * multipart/form-data under <file_attach_name>. More information on Sending Files
         * »
         */
        public InputFile|string|null $thumbnail,
        /** Sends the message silently. Users will receive a notification with no sound. */
        public ?bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /** Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard,
         * custom reply keyboard, instructions to remove a reply keyboard or to force a
         * reply from the user. Not supported for messages sent on behalf of a business
         * account
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}

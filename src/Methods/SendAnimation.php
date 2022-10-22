<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\InputFile;
use TelegramBot\Types\ReplyKeyboardMarkup;

/**
 * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video
 * without sound). On success, the sent Message is returned. Bots can
 * currently send animation files of up to 50 MB in size, this limit may
 * be changed in the future.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendAnimation extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * Animation to send. Pass a file_id as String to send an animation that
     * exists on the Telegram servers (recommended), pass an HTTP URL as a
     * String for Telegram to get an animation from the Internet, or upload a
     * new animation using multipart/form-data. More information on Sending
     * Files »
     */
    public InputFile|string $animation;

    /** Duration of sent animation in seconds */
    public ?int $duration;

    /** Animation width */
    public ?int $width;

    /** Animation height */
    public ?int $height;

    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for
     * the file is supported server-side. The thumbnail should be in JPEG
     * format and less than 200 kB in size. A thumbnail's width and height
     * should not exceed 320. Ignored if the file is not uploaded using
     * multipart/form-data. Thumbnails can't be reused and can be only
     * uploaded as a new file, so you can pass
     * “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More information on
     * Sending Files »
     */
    public InputFile|string|null $thumb;

    /**
     * Animation caption (may also be used when resending animation by
     * file_id), 0-1024 characters after entities parsing
     */
    public ?string $caption;

    /**
     * Mode for parsing entities in the animation caption. See formatting
     * options for more details.
     */
    public ?string $parse_mode;

    /**
     * A JSON-serialized list of special entities that appear in the caption,
     * which can be specified instead of parse_mode
     */
    public ?array $caption_entities;

    /**
     * Sends the message silently. Users will receive a notification with no
     * sound.
     */
    public ?bool $disable_notification;

    /** Protects the contents of the sent message from forwarding and saving */
    public ?bool $protect_content;

    /** If the message is a reply, ID of the original message */
    public ?int $reply_to_message_id;

    /**
     * Pass True if the message should be sent even if the specified
     * replied-to message is not found
     */
    public ?bool $allow_sending_without_reply;

    /**
     * Additional interface options. A JSON-serialized object for an inline
     * keyboard, custom reply keyboard, instructions to remove reply keyboard
     * or to force a reply from the user.
     */
    public InlineKeyboardMarkup|ReplyKeyboardMarkup|null $reply_markup;
}

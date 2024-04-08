<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method when you need to tell the user that something is
 * happening on the bot's side. The status is set for 5 seconds or less
 * (when a message arrives from your bot, Telegram clients clear its
 * typing status). Returns True on success.
 *
 * Example: The ImageBot needs some time to process a request and upload
 * the image. Instead of sending a text message along the lines of
 * “Retrieving image, please wait…”, the bot may use sendChatAction
 * with action = upload_photo. The user will see a “sending photo”
 * status for the bot.
 *
 * We only recommend using this method when a response from the bot will
 * take a noticeable amount of time to arrive.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendChatAction extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * Unique identifier of the business connection on behalf of which the
     * action will be sent
     */
    public ?string $business_connection_id;

    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Unique identifier for the target message thread; for supergroups only */
    public ?int $message_thread_id;

    /**
     * Type of action to broadcast. Choose one, depending on what the user is
     * about to receive: typing for text messages, upload_photo for photos,
     * record_video or upload_video for videos, record_voice or upload_voice
     * for voice notes, upload_document for general files, choose_sticker for
     * stickers, find_location for location data, record_video_note or
     * upload_video_note for video notes.
     */
    public string $action;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'action'];
}

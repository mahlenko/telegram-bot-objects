<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method when you need to tell the user that something is
 * happening on the bot's side. The status is set for 5 seconds or less
 * (when a message arrives from your bot, Telegram clients clear its
 * typing status). Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SendChatAction extends TelegramMethod implements MethodsInterface
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

    /** Response mapping type. */
    public string $response_type = 'bool';
}

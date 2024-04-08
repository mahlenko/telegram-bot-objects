<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ChatPermissions;

/**
 * Use this method to set default chat permissions for all members. The
 * bot must be an administrator in the group or a supergroup for this to
 * work and must have the can_restrict_members administrator rights.
 * Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetChatPermissions extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** A JSON-serialized object for new default chat permissions */
    public ChatPermissions $permissions;

    /**
     * Pass True if chat permissions are set independently. Otherwise, the
     * can_send_other_messages and can_add_web_page_previews permissions will
     * imply the can_send_messages, can_send_audios, can_send_documents,
     * can_send_photos, can_send_videos, can_send_video_notes, and
     * can_send_voice_notes permissions; the can_send_polls permission will
     * imply the can_send_messages permission.
     */
    public ?bool $use_independent_chat_permissions;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'permissions'];
}

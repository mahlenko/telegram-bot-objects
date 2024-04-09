<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ChatPermissions;

/**
 * Use this method to restrict a user in a supergroup. The bot must be an
 * administrator in the supergroup for this to work and must have the
 * appropriate administrator rights. Pass <em>True</em> for all
 * permissions to lift restrictions from a user. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class RestrictChatMember extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;

    /** A JSON-serialized object for new user permissions */
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
     * Date when restrictions will be lifted for the user; Unix time. If user
     * is restricted for more than 366 days or less than 30 seconds from the
     * current time, they are considered to be restricted forever
     */
    public ?int $until_date;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'user_id', 'permissions'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

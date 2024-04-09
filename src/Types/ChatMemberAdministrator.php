<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents a <a href="#chatmember">chat member</a> that has some
 * additional privileges.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ChatMemberAdministrator extends TelegramType implements TypesInterface
{
    /** The member's status in the chat, always “administrator” */
    public string $status;

    /** Information about the user */
    public User $user;

    /**
     * True, if the bot is allowed to edit administrator privileges of that
     * user
     */
    public bool $can_be_edited;

    /** True, if the user's presence in the chat is hidden */
    public bool $is_anonymous;

    /**
     * True, if the administrator can access the chat event log, get boost
     * list, see hidden supergroup and channel members, report spam messages
     * and ignore slow mode. Implied by any other administrator privilege.
     */
    public bool $can_manage_chat;

    /** True, if the administrator can delete messages of other users */
    public bool $can_delete_messages;

    /** True, if the administrator can manage video chats */
    public bool $can_manage_video_chats;

    /**
     * True, if the administrator can restrict, ban or unban chat members, or
     * access supergroup statistics
     */
    public bool $can_restrict_members;

    /**
     * True, if the administrator can add new administrators with a subset of
     * their own privileges or demote administrators that they have promoted,
     * directly or indirectly (promoted by administrators that were appointed
     * by the user)
     */
    public bool $can_promote_members;

    /**
     * True, if the user is allowed to change the chat title, photo and other
     * settings
     */
    public bool $can_change_info;

    /** True, if the user is allowed to invite new users to the chat */
    public bool $can_invite_users;

    /** True, if the administrator can post stories to the chat */
    public bool $can_post_stories;

    /** True, if the administrator can edit stories posted by other users */
    public bool $can_edit_stories;

    /** True, if the administrator can delete stories posted by other users */
    public bool $can_delete_stories;

    /**
     * Optional. True, if the administrator can post messages in the channel,
     * or access channel statistics; for channels only
     */
    public ?bool $can_post_messages;

    /**
     * Optional. True, if the administrator can edit messages of other users
     * and can pin messages; for channels only
     */
    public ?bool $can_edit_messages;

    /**
     * Optional. True, if the user is allowed to pin messages; for groups and
     * supergroups only
     */
    public ?bool $can_pin_messages;

    /**
     * Optional. True, if the user is allowed to create, rename, close, and
     * reopen forum topics; for supergroups only
     */
    public ?bool $can_manage_topics;

    /** Optional. Custom title for this user */
    public ?string $custom_title;
}

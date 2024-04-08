<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TelegramTypeInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a chat.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Chat extends TelegramType implements TelegramTypeInterface
{
    /**
     * Unique identifier for this chat. This number may have more than 32
     * significant bits and some programming languages may have
     * difficulty/silent defects in interpreting it. But it has at most 52
     * significant bits, so a signed 64-bit integer or double-precision float
     * type are safe for storing this identifier.
     */
    public int $id;

    /**
     * Type of chat, can be either “private”, “group”,
     * “supergroup” or “channel”
     */
    public string $type;

    /** Optional. Title, for supergroups, channels and group chats */
    public ?string $title;

    /**
     * Optional. Username, for private chats, supergroups and channels if
     * available
     */
    public ?string $username;

    /** Optional. First name of the other party in a private chat */
    public ?string $first_name;

    /** Optional. Last name of the other party in a private chat */
    public ?string $last_name;

    /** Optional. True, if the supergroup chat is a forum (has topics enabled) */
    public ?bool $is_forum;

    /** Optional. Chat photo. Returned only in getChat. */
    public ?ChatPhoto $photo;

    /**
     * Optional. If non-empty, the list of all active chat usernames; for
     * private chats, supergroups and channels. Returned only in getChat.
     *
     * @var array<string>
     */
    public ?array $active_usernames;

    /**
     * Optional. For private chats, the date of birth of the user. Returned
     * only in getChat.
     */
    public ?Birthdate $birthdate;

    /**
     * Optional. For private chats with business accounts, the intro of the
     * business. Returned only in getChat.
     */
    public ?BusinessIntro $business_intro;

    /**
     * Optional. For private chats with business accounts, the location of
     * the business. Returned only in getChat.
     */
    public ?BusinessLocation $business_location;

    /**
     * Optional. For private chats with business accounts, the opening hours
     * of the business. Returned only in getChat.
     */
    public ?BusinessOpeningHours $business_opening_hours;

    /**
     * Optional. For private chats, the personal channel of the user.
     * Returned only in getChat.
     */
    public ?Chat $personal_chat;

    /**
     * Optional. List of available reactions allowed in the chat. If omitted,
     * then all emoji reactions are allowed. Returned only in getChat.
     *
     * @var array<ReactionType>
     */
    public ?array $available_reactions;

    /**
     * Optional. Identifier of the accent color for the chat name and
     * backgrounds of the chat photo, reply header, and link preview. See
     * accent colors for more details. Returned only in getChat. Always
     * returned in getChat.
     */
    public ?int $accent_color_id;

    /**
     * Optional. Custom emoji identifier of emoji chosen by the chat for the
     * reply header and link preview background. Returned only in getChat.
     */
    public ?string $background_custom_emoji_id;

    /**
     * Optional. Identifier of the accent color for the chat's profile
     * background. See profile accent colors for more details. Returned only
     * in getChat.
     */
    public ?int $profile_accent_color_id;

    /**
     * Optional. Custom emoji identifier of the emoji chosen by the chat for
     * its profile background. Returned only in getChat.
     */
    public ?string $profile_background_custom_emoji_id;

    /**
     * Optional. Custom emoji identifier of the emoji status of the chat or
     * the other party in a private chat. Returned only in getChat.
     */
    public ?string $emoji_status_custom_emoji_id;

    /**
     * Optional. Expiration date of the emoji status of the chat or the other
     * party in a private chat, in Unix time, if any. Returned only in
     * getChat.
     */
    public ?int $emoji_status_expiration_date;

    /**
     * Optional. Bio of the other party in a private chat. Returned only in
     * getChat.
     */
    public ?string $bio;

    /**
     * Optional. True, if privacy settings of the other party in the private
     * chat allows to use tg://user?id=<user_id> links only in chats with the
     * user. Returned only in getChat.
     */
    public ?bool $has_private_forwards;

    /**
     * Optional. True, if the privacy settings of the other party restrict
     * sending voice and video note messages in the private chat. Returned
     * only in getChat.
     */
    public ?bool $has_restricted_voice_and_video_messages;

    /**
     * Optional. True, if users need to join the supergroup before they can
     * send messages. Returned only in getChat.
     */
    public ?bool $join_to_send_messages;

    /**
     * Optional. True, if all users directly joining the supergroup need to
     * be approved by supergroup administrators. Returned only in getChat.
     */
    public ?bool $join_by_request;

    /**
     * Optional. Description, for groups, supergroups and channel chats.
     * Returned only in getChat.
     */
    public ?string $description;

    /**
     * Optional. Primary invite link, for groups, supergroups and channel
     * chats. Returned only in getChat.
     */
    public ?string $invite_link;

    /**
     * Optional. The most recent pinned message (by sending date). Returned
     * only in getChat.
     */
    public ?Message $pinned_message;

    /**
     * Optional. Default chat member permissions, for groups and supergroups.
     * Returned only in getChat.
     */
    public ?ChatPermissions $permissions;

    /**
     * Optional. For supergroups, the minimum allowed delay between
     * consecutive messages sent by each unprivileged user; in seconds.
     * Returned only in getChat.
     */
    public ?int $slow_mode_delay;

    /**
     * Optional. For supergroups, the minimum number of boosts that a
     * non-administrator user needs to add in order to ignore slow mode and
     * chat permissions. Returned only in getChat.
     */
    public ?int $unrestrict_boost_count;

    /**
     * Optional. The time after which all messages sent to the chat will be
     * automatically deleted; in seconds. Returned only in getChat.
     */
    public ?int $message_auto_delete_time;

    /**
     * Optional. True, if aggressive anti-spam checks are enabled in the
     * supergroup. The field is only available to chat administrators.
     * Returned only in getChat.
     */
    public ?bool $has_aggressive_anti_spam_enabled;

    /**
     * Optional. True, if non-administrators can only get the list of bots
     * and administrators in the chat. Returned only in getChat.
     */
    public ?bool $has_hidden_members;

    /**
     * Optional. True, if messages from the chat can't be forwarded to other
     * chats. Returned only in getChat.
     */
    public ?bool $has_protected_content;

    /**
     * Optional. True, if new chat members will have access to old messages;
     * available only to chat administrators. Returned only in getChat.
     */
    public ?bool $has_visible_history;

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in
     * getChat.
     */
    public ?string $sticker_set_name;

    /**
     * Optional. True, if the bot can change the group sticker set. Returned
     * only in getChat.
     */
    public ?bool $can_set_sticker_set;

    /**
     * Optional. For supergroups, the name of the group's custom emoji
     * sticker set. Custom emoji from this set can be used by all users and
     * bots in the group. Returned only in getChat.
     */
    public ?string $custom_emoji_sticker_set_name;

    /**
     * Optional. Unique identifier for the linked chat, i.e. the discussion
     * group identifier for a channel and vice versa; for supergroups and
     * channel chats. This identifier may be greater than 32 bits and some
     * programming languages may have difficulty/silent defects in
     * interpreting it. But it is smaller than 52 bits, so a signed 64 bit
     * integer or double-precision float type are safe for storing this
     * identifier. Returned only in getChat.
     */
    public ?int $linked_chat_id;

    /**
     * Optional. For supergroups, the location to which the supergroup is
     * connected. Returned only in getChat.
     */
    public ?ChatLocation $location;
}

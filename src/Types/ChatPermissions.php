<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Describes actions that a non-administrator user is allowed to take in
 * a chat.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class ChatPermissions extends TelegramType implements TypesInterface
{
    /**
     * Optional. True, if the user is allowed to send text messages,
     * contacts, giveaways, giveaway winners, invoices, locations and venues
     */
    public ?bool $can_send_messages;

    /** Optional. True, if the user is allowed to send audios */
    public ?bool $can_send_audios;

    /** Optional. True, if the user is allowed to send documents */
    public ?bool $can_send_documents;

    /** Optional. True, if the user is allowed to send photos */
    public ?bool $can_send_photos;

    /** Optional. True, if the user is allowed to send videos */
    public ?bool $can_send_videos;

    /** Optional. True, if the user is allowed to send video notes */
    public ?bool $can_send_video_notes;

    /** Optional. True, if the user is allowed to send voice notes */
    public ?bool $can_send_voice_notes;

    /** Optional. True, if the user is allowed to send polls */
    public ?bool $can_send_polls;

    /**
     * Optional. True, if the user is allowed to send animations, games,
     * stickers and use inline bots
     */
    public ?bool $can_send_other_messages;

    /**
     * Optional. True, if the user is allowed to add web page previews to
     * their messages
     */
    public ?bool $can_add_web_page_previews;

    /**
     * Optional. True, if the user is allowed to change the chat title, photo
     * and other settings. Ignored in public supergroups
     */
    public ?bool $can_change_info;

    /** Optional. True, if the user is allowed to invite new users to the chat */
    public ?bool $can_invite_users;

    /**
     * Optional. True, if the user is allowed to pin messages. Ignored in
     * public supergroups
     */
    public ?bool $can_pin_messages;

    /**
     * Optional. True, if the user is allowed to create forum topics. If
     * omitted defaults to the value of can_pin_messages
     */
    public ?bool $can_manage_topics;
}

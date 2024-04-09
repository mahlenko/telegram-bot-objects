<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a message.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class Message extends TelegramType implements TypesInterface
{
    /** Unique message identifier inside this chat */
    public int $message_id;

    /**
     * Optional. Unique identifier of a message thread to which the message
     * belongs; for supergroups only
     */
    public ?int $message_thread_id;

    /**
     * Optional. Sender of the message; empty for messages sent to channels.
     * For backward compatibility, the field contains a fake sender user in
     * non-channel chats, if the message was sent on behalf of a chat.
     */
    public ?User $from;

    /**
     * Optional. Sender of the message, sent on behalf of a chat. For
     * example, the channel itself for channel posts, the supergroup itself
     * for messages from anonymous group administrators, the linked channel
     * for messages automatically forwarded to the discussion group. For
     * backward compatibility, the field from contains a fake sender user in
     * non-channel chats, if the message was sent on behalf of a chat.
     */
    public ?Chat $sender_chat;

    /**
     * Optional. If the sender of the message boosted the chat, the number of
     * boosts added by the user
     */
    public ?int $sender_boost_count;

    /**
     * Optional. The bot that actually sent the message on behalf of the
     * business account. Available only for outgoing messages sent on behalf
     * of the connected business account.
     */
    public ?User $sender_business_bot;

    /**
     * Date the message was sent in Unix time. It is always a positive
     * number, representing a valid date.
     */
    public int $date;

    /**
     * Optional. Unique identifier of the business connection from which the
     * message was received. If non-empty, the message belongs to a chat of
     * the corresponding business account that is independent from any
     * potential bot chat which might share the same identifier.
     */
    public ?string $business_connection_id;

    /** Chat the message belongs to */
    public Chat $chat;

    /**
     * Optional. Information about the original message for forwarded
     * messages
     */
    public ?MessageOrigin $forward_origin;

    /** Optional. True, if the message is sent to a forum topic */
    public ?bool $is_topic_message;

    /**
     * Optional. True, if the message is a channel post that was
     * automatically forwarded to the connected discussion group
     */
    public ?bool $is_automatic_forward;

    /**
     * Optional. For replies in the same chat and message thread, the
     * original message. Note that the Message object in this field will not
     * contain further reply_to_message fields even if it itself is a reply.
     */
    public ?Message $reply_to_message;

    /**
     * Optional. Information about the message that is being replied to,
     * which may come from another chat or forum topic
     */
    public ?ExternalReplyInfo $external_reply;

    /**
     * Optional. For replies that quote part of the original message, the
     * quoted part of the message
     */
    public ?TextQuote $quote;

    /** Optional. For replies to a story, the original story */
    public ?Story $reply_to_story;

    /** Optional. Bot through which the message was sent */
    public ?User $via_bot;

    /** Optional. Date the message was last edited in Unix time */
    public ?int $edit_date;

    /** Optional. True, if the message can't be forwarded */
    public ?bool $has_protected_content;

    /**
     * Optional. True, if the message was sent by an implicit action, for
     * example, as an away or a greeting business message, or as a scheduled
     * message
     */
    public ?bool $is_from_offline;

    /**
     * Optional. The unique identifier of a media message group this message
     * belongs to
     */
    public ?string $media_group_id;

    /**
     * Optional. Signature of the post author for messages in channels, or
     * the custom title of an anonymous group administrator
     */
    public ?string $author_signature;

    /** Optional. For text messages, the actual UTF-8 text of the message */
    public ?string $text;

    /**
     * Optional. For text messages, special entities like usernames, URLs,
     * bot commands, etc. that appear in the text
     *
     * @var array<MessageEntity>
     */
    public ?array $entities;

    /**
     * Optional. Options used for link preview generation for the message, if
     * it is a text message and link preview options were changed
     */
    public ?LinkPreviewOptions $link_preview_options;

    /**
     * Optional. Message is an animation, information about the animation.
     * For backward compatibility, when this field is set, the document field
     * will also be set
     */
    public ?Animation $animation;

    /** Optional. Message is an audio file, information about the file */
    public ?Audio $audio;

    /** Optional. Message is a general file, information about the file */
    public ?Document $document;

    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @var array<PhotoSize>
     */
    public ?array $photo;

    /** Optional. Message is a sticker, information about the sticker */
    public ?Sticker $sticker;

    /** Optional. Message is a forwarded story */
    public ?Story $story;

    /** Optional. Message is a video, information about the video */
    public ?Video $video;

    /** Optional. Message is a video note, information about the video message */
    public ?VideoNote $video_note;

    /** Optional. Message is a voice message, information about the file */
    public ?Voice $voice;

    /**
     * Optional. Caption for the animation, audio, document, photo, video or
     * voice
     */
    public ?string $caption;

    /**
     * Optional. For messages with a caption, special entities like
     * usernames, URLs, bot commands, etc. that appear in the caption
     *
     * @var array<MessageEntity>
     */
    public ?array $caption_entities;

    /** Optional. True, if the message media is covered by a spoiler animation */
    public ?bool $has_media_spoiler;

    /** Optional. Message is a shared contact, information about the contact */
    public ?Contact $contact;

    /** Optional. Message is a dice with random value */
    public ?Dice $dice;

    /**
     * Optional. Message is a game, information about the game. More about
     * games »
     */
    public ?Game $game;

    /** Optional. Message is a native poll, information about the poll */
    public ?Poll $poll;

    /**
     * Optional. Message is a venue, information about the venue. For
     * backward compatibility, when this field is set, the location field
     * will also be set
     */
    public ?Venue $venue;

    /** Optional. Message is a shared location, information about the location */
    public ?Location $location;

    /**
     * Optional. New members that were added to the group or supergroup and
     * information about them (the bot itself may be one of these members)
     *
     * @var array<User>
     */
    public ?array $new_chat_members;

    /**
     * Optional. A member was removed from the group, information about them
     * (this member may be the bot itself)
     */
    public ?User $left_chat_member;

    /** Optional. A chat title was changed to this value */
    public ?string $new_chat_title;

    /**
     * Optional. A chat photo was change to this value
     *
     * @var array<PhotoSize>
     */
    public ?array $new_chat_photo;

    /** Optional. Service message: the chat photo was deleted */
    public ?bool $delete_chat_photo;

    /** Optional. Service message: the group has been created */
    public ?bool $group_chat_created;

    /**
     * Optional. Service message: the supergroup has been created. This field
     * can't be received in a message coming through updates, because bot
     * can't be a member of a supergroup when it is created. It can only be
     * found in reply_to_message if someone replies to a very first message
     * in a directly created supergroup.
     */
    public ?bool $supergroup_chat_created;

    /**
     * Optional. Service message: the channel has been created. This field
     * can't be received in a message coming through updates, because bot
     * can't be a member of a channel when it is created. It can only be
     * found in reply_to_message if someone replies to a very first message
     * in a channel.
     */
    public ?bool $channel_chat_created;

    /**
     * Optional. Service message: auto-delete timer settings changed in the
     * chat
     */
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed;

    /**
     * Optional. The group has been migrated to a supergroup with the
     * specified identifier. This number may have more than 32 significant
     * bits and some programming languages may have difficulty/silent defects
     * in interpreting it. But it has at most 52 significant bits, so a
     * signed 64-bit integer or double-precision float type are safe for
     * storing this identifier.
     */
    public ?int $migrate_to_chat_id;

    /**
     * Optional. The supergroup has been migrated from a group with the
     * specified identifier. This number may have more than 32 significant
     * bits and some programming languages may have difficulty/silent defects
     * in interpreting it. But it has at most 52 significant bits, so a
     * signed 64-bit integer or double-precision float type are safe for
     * storing this identifier.
     */
    public ?int $migrate_from_chat_id;

    /**
     * Optional. Specified message was pinned. Note that the Message object
     * in this field will not contain further reply_to_message fields even if
     * it itself is a reply.
     */
    public ?MaybeInaccessibleMessage $pinned_message;

    /**
     * Optional. Message is an invoice for a payment, information about the
     * invoice. More about payments »
     */
    public ?Invoice $invoice;

    /**
     * Optional. Message is a service message about a successful payment,
     * information about the payment. More about payments »
     */
    public ?SuccessfulPayment $successful_payment;

    /** Optional. Service message: users were shared with the bot */
    public ?UsersShared $users_shared;

    /** Optional. Service message: a chat was shared with the bot */
    public ?ChatShared $chat_shared;

    /**
     * Optional. The domain name of the website on which the user has logged
     * in. More about Telegram Login »
     */
    public ?string $connected_website;

    /**
     * Optional. Service message: the user allowed the bot to write messages
     * after adding it to the attachment or side menu, launching a Web App
     * from a link, or accepting an explicit request from a Web App sent by
     * the method requestWriteAccess
     */
    public ?WriteAccessAllowed $write_access_allowed;

    /** Optional. Telegram Passport data */
    public ?PassportData $passport_data;

    /**
     * Optional. Service message. A user in the chat triggered another user's
     * proximity alert while sharing Live Location.
     */
    public ?ProximityAlertTriggered $proximity_alert_triggered;

    /** Optional. Service message: user boosted the chat */
    public ?ChatBoostAdded $boost_added;

    /** Optional. Service message: forum topic created */
    public ?ForumTopicCreated $forum_topic_created;

    /** Optional. Service message: forum topic edited */
    public ?ForumTopicEdited $forum_topic_edited;

    /** Optional. Service message: forum topic closed */
    public ?ForumTopicClosed $forum_topic_closed;

    /** Optional. Service message: forum topic reopened */
    public ?ForumTopicReopened $forum_topic_reopened;

    /** Optional. Service message: the 'General' forum topic hidden */
    public ?GeneralForumTopicHidden $general_forum_topic_hidden;

    /** Optional. Service message: the 'General' forum topic unhidden */
    public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden;

    /** Optional. Service message: a scheduled giveaway was created */
    public ?GiveawayCreated $giveaway_created;

    /** Optional. The message is a scheduled giveaway message */
    public ?Giveaway $giveaway;

    /** Optional. A giveaway with public winners was completed */
    public ?GiveawayWinners $giveaway_winners;

    /**
     * Optional. Service message: a giveaway without public winners was
     * completed
     */
    public ?GiveawayCompleted $giveaway_completed;

    /** Optional. Service message: video chat scheduled */
    public ?VideoChatScheduled $video_chat_scheduled;

    /** Optional. Service message: video chat started */
    public ?VideoChatStarted $video_chat_started;

    /** Optional. Service message: video chat ended */
    public ?VideoChatEnded $video_chat_ended;

    /** Optional. Service message: new participants invited to a video chat */
    public ?VideoChatParticipantsInvited $video_chat_participants_invited;

    /** Optional. Service message: data sent by a Web App */
    public ?WebAppData $web_app_data;

    /**
     * Optional. Inline keyboard attached to the message. login_url buttons
     * are represented as ordinary url buttons.
     */
    public ?InlineKeyboardMarkup $reply_markup;
}

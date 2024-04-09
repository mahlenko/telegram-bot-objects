<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object contains information about a message that is being replied
 * to, which may come from another chat or forum topic.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ExternalReplyInfo extends TelegramType implements TypesInterface
{
    /** Origin of the message replied to by the given message */
    public MessageOrigin $origin;

    /**
     * Optional. Chat the original message belongs to. Available only if the
     * chat is a supergroup or a channel.
     */
    public ?Chat $chat;

    /**
     * Optional. Unique message identifier inside the original chat.
     * Available only if the original chat is a supergroup or a channel.
     */
    public ?int $message_id;

    /**
     * Optional. Options used for link preview generation for the original
     * message, if it is a text message
     */
    public ?LinkPreviewOptions $link_preview_options;

    /** Optional. Message is an animation, information about the animation */
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

    /**
     * Optional. Message is a scheduled giveaway, information about the
     * giveaway
     */
    public ?Giveaway $giveaway;

    /** Optional. A giveaway with public winners was completed */
    public ?GiveawayWinners $giveaway_winners;

    /**
     * Optional. Message is an invoice for a payment, information about the
     * invoice. More about payments »
     */
    public ?Invoice $invoice;

    /** Optional. Message is a shared location, information about the location */
    public ?Location $location;

    /** Optional. Message is a native poll, information about the poll */
    public ?Poll $poll;

    /** Optional. Message is a venue, information about the venue */
    public ?Venue $venue;
}

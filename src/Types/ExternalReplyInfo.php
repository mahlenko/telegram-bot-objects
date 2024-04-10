<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ExternalReplyInfo
 *
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ExternalReplyInfo implements TelegramTypeInterface
{
	public function __construct(
		/** Origin of the message replied to by the given message */
		public MessageOrigin $origin,
		/** Chat the original message belongs to. Available only if the chat is a supergroup or a channel. */
		public ?Chat $chat,
		/** Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel. */
		public ?int $message_id,
		/** Options used for link preview generation for the original message, if it is a text message */
		public ?LinkPreviewOptions $link_preview_options,
		/** Message is an animation, information about the animation */
		public ?Animation $animation,
		/** Message is an audio file, information about the file */
		public ?Audio $audio,
		/** Message is a general file, information about the file */
		public ?Document $document,
		/**
		 * Message is a photo, available sizes of the photo
		 * @var array<PhotoSize>
		 */
		public ?array $photo,
		/** Message is a sticker, information about the sticker */
		public ?Sticker $sticker,
		/** Message is a forwarded story */
		public ?Story $story,
		/** Message is a video, information about the video */
		public ?Video $video,
		/** Message is a video note, information about the video message */
		public ?VideoNote $video_note,
		/** Message is a voice message, information about the file */
		public ?Voice $voice,
		/** True, if the message media is covered by a spoiler animation */
		public ?true $has_media_spoiler,
		/** Message is a shared contact, information about the contact */
		public ?Contact $contact,
		/** Message is a dice with random value */
		public ?Dice $dice,
		/** Message is a game, information about the game. More about games » */
		public ?Game $game,
		/** Message is a scheduled giveaway, information about the giveaway */
		public ?Giveaway $giveaway,
		/** A giveaway with public winners was completed */
		public ?GiveawayWinners $giveaway_winners,
		/** Message is an invoice for a payment, information about the invoice. More about payments » */
		public ?Invoice $invoice,
		/** Message is a shared location, information about the location */
		public ?Location $location,
		/** Message is a native poll, information about the poll */
		public ?Poll $poll,
		/** Message is a venue, information about the venue */
		public ?Venue $venue,
	) {
	}
}

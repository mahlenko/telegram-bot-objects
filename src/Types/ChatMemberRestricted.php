<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatMemberRestricted
 *
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatMemberRestricted implements TelegramTypeInterface
{
	public function __construct(
		/** The member's status in the chat, always “restricted” */
		public string $status,
		/** Information about the user */
		public User $user,
		/** True, if the user is a member of the chat at the moment of the request */
		public bool $is_member,
		/** True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues */
		public bool $can_send_messages,
		/** True, if the user is allowed to send audios */
		public bool $can_send_audios,
		/** True, if the user is allowed to send documents */
		public bool $can_send_documents,
		/** True, if the user is allowed to send photos */
		public bool $can_send_photos,
		/** True, if the user is allowed to send videos */
		public bool $can_send_videos,
		/** True, if the user is allowed to send video notes */
		public bool $can_send_video_notes,
		/** True, if the user is allowed to send voice notes */
		public bool $can_send_voice_notes,
		/** True, if the user is allowed to send polls */
		public bool $can_send_polls,
		/** True, if the user is allowed to send animations, games, stickers and use inline bots */
		public bool $can_send_other_messages,
		/** True, if the user is allowed to add web page previews to their messages */
		public bool $can_add_web_page_previews,
		/** True, if the user is allowed to change the chat title, photo and other settings */
		public bool $can_change_info,
		/** True, if the user is allowed to invite new users to the chat */
		public bool $can_invite_users,
		/** True, if the user is allowed to pin messages */
		public bool $can_pin_messages,
		/** True, if the user is allowed to create forum topics */
		public bool $can_manage_topics,
		/** Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever */
		public int $until_date,
	) {
	}
}

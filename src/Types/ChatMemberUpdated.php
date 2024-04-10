<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatMemberUpdated
 *
 * This object represents changes in the status of a chat member.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatMemberUpdated implements TelegramTypeInterface
{
	public function __construct(
		/** Chat the user belongs to */
		public ?Chat $chat,
		/** Performer of the action, which resulted in the change */
		public ?User $from,
		/** Date the change was done in Unix time */
		public ?int $date,
		/** Previous information about the chat member */
		public ?ChatMember $old_chat_member,
		/** New information about the chat member */
		public ?ChatMember $new_chat_member,
		/** Chat invite link, which was used by the user to join the chat; for joining by invite link events only. */
		public ChatInviteLink $invite_link,
		/** True, if the user joined the chat via a chat folder invite link */
		public bool $via_chat_folder_invite_link,
	) {
	}
}

<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * PromoteChatMember
 *
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass False for all boolean parameters to demote a user. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class PromoteChatMember implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = 'true';

	public function __construct(
		/** Unique identifier for the target chat or username of the target channel (in the format @channelusername) */
		public int|string|null $chat_id,
		/** Unique identifier of the target user */
		public ?int $user_id,
		/** Pass True if the administrator's presence in the chat is hidden */
		public bool $is_anonymous,
		/** Pass True if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege. */
		public bool $can_manage_chat,
		/** Pass True if the administrator can delete messages of other users */
		public bool $can_delete_messages,
		/** Pass True if the administrator can manage video chats */
		public bool $can_manage_video_chats,
		/** Pass True if the administrator can restrict, ban or unban chat members, or access supergroup statistics */
		public bool $can_restrict_members,
		/** Pass True if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him) */
		public bool $can_promote_members,
		/** Pass True if the administrator can change chat title, photo and other settings */
		public bool $can_change_info,
		/** Pass True if the administrator can invite new users to the chat */
		public bool $can_invite_users,
		/** Pass True if the administrator can post stories to the chat */
		public bool $can_post_stories,
		/** Pass True if the administrator can edit stories posted by other users */
		public bool $can_edit_stories,
		/** Pass True if the administrator can delete stories posted by other users */
		public bool $can_delete_stories,
		/** Pass True if the administrator can post messages in the channel, or access channel statistics; for channels only */
		public bool $can_post_messages,
		/** Pass True if the administrator can edit messages of other users and can pin messages; for channels only */
		public bool $can_edit_messages,
		/** Pass True if the administrator can pin messages; for supergroups only */
		public bool $can_pin_messages,
		/** Pass True if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only */
		public bool $can_manage_topics,
	) {
	}
}

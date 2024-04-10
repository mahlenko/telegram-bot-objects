<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatInviteLink
 *
 * Represents an invite link for a chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatInviteLink implements TelegramTypeInterface
{
	public function __construct(
		/** The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”. */
		public string $invite_link,
		/** Creator of the link */
		public User $creator,
		/** True, if users joining the chat via the link need to be approved by chat administrators */
		public bool $creates_join_request,
		/** True, if the link is primary */
		public bool $is_primary,
		/** True, if the link is revoked */
		public bool $is_revoked,
		/** Invite link name */
		public ?string $name,
		/** Point in time (Unix timestamp) when the link will expire or has been expired */
		public ?int $expire_date,
		/** The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999 */
		public ?int $member_limit,
		/** Number of pending join requests created using this link */
		public ?int $pending_join_request_count,
	) {
	}
}

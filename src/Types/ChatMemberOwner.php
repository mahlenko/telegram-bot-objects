<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatMemberOwner
 *
 * Represents a chat member that owns the chat and has all administrator privileges.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatMemberOwner implements TelegramTypeInterface
{
	public function __construct(
		/** The member's status in the chat, always “creator” */
		public ?string $status,
		/** Information about the user */
		public ?User $user,
		/** True, if the user's presence in the chat is hidden */
		public ?bool $is_anonymous,
		/** Custom title for this user */
		public string $custom_title,
	) {
	}
}

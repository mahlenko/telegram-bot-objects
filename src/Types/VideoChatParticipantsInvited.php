<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * VideoChatParticipantsInvited
 *
 * This object represents a service message about new members invited to a video chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class VideoChatParticipantsInvited implements TelegramTypeInterface
{
	public function __construct(
		/**
		 * New members that were invited to the video chat
		 * @var array<User>
		 */
		public ?array $users,
	) {
	}
}

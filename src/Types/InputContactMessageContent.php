<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * InputContactMessageContent
 *
 * Represents the content of a contact message to be sent as the result of an inline query.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class InputContactMessageContent implements TelegramTypeInterface
{
	public function __construct(
		/** Contact's phone number */
		public ?string $phone_number,
		/** Contact's first name */
		public ?string $first_name,
		/** Contact's last name */
		public string $last_name,
		/** Additional data about the contact in the form of a vCard, 0-2048 bytes */
		public string $vcard,
	) {
	}
}

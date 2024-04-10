<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * WriteAccessAllowed
 *
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class WriteAccessAllowed implements TelegramTypeInterface
{
	public function __construct(
		/** True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess */
		public ?bool $from_request,
		/** Name of the Web App, if the access was granted when the Web App was launched from a link */
		public ?string $web_app_name,
		/** True, if the access was granted when the bot was added to the attachment or side menu */
		public ?bool $from_attachment_menu,
	) {
	}
}

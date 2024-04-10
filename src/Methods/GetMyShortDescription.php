<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\BotShortDescription;

/**
 * GetMyShortDescription
 *
 * Use this method to get the current bot short description for the given user language. Returns BotShortDescription on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetMyShortDescription implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = BotShortDescription::class;

	public function __construct(
		/** A two-letter ISO 639-1 language code or an empty string */
		public ?string $language_code,
	) {
	}
}

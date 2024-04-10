<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\BotDescription;

/**
 * GetMyDescription
 *
 * Use this method to get the current bot description for the given user language. Returns BotDescription on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetMyDescription implements TelegramMethodInterface
{
	public const RESPONSE_TYPE = BotDescription::class;

	public function __construct(
		/** A two-letter ISO 639-1 language code or an empty string */
		public ?string $language_code,
	) {
	}
}

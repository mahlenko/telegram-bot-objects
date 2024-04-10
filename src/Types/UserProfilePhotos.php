<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * UserProfilePhotos
 *
 * This object represent a user's profile pictures.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class UserProfilePhotos implements TelegramTypeInterface
{
	public function __construct(
		/** Total number of profile pictures the target user has */
		public ?int $total_count,
		/**
		 * Requested profile pictures (in up to 4 sizes each)
		 * @var array<Array of PhotoSize>
		 */
		public $photos,
	) {
	}
}

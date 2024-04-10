<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\UserProfilePhotos;

/**
 * GetUserProfilePhotos
 *
 * Use this method to get a list of profile pictures for a user. Returns a
 * UserProfilePhotos object.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetUserProfilePhotos implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = UserProfilePhotos::class;

    public function __construct(
        /** Unique identifier of the target user */
        public ?int $user_id,
        /**
         * Sequential number of the first photo to be returned. By default, all photos are
         * returned.
         */
        public int $offset,
        /**
         * Limits the number of photos to be retrieved. Values between 1-100 are accepted.
         * Defaults to 100.
         */
        public int $limit,
    ) {
    }
}

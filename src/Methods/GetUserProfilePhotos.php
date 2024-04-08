<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to get a list of profile pictures for a user. Returns
 * a UserProfilePhotos object.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetUserProfilePhotos extends TelegramMethod implements TelegramMethodInterface
{
    /** Unique identifier of the target user */
    public int $user_id;

    /**
     * Sequential number of the first photo to be returned. By default, all
     * photos are returned.
     */
    public ?int $offset;

    /**
     * Limits the number of photos to be retrieved. Values between 1-100 are
     * accepted. Defaults to 100.
     */
    public ?int $limit;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['user_id'];
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represent a user's profile pictures.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class UserProfilePhotos extends TelegramType implements TypesInterface
{
    /** Total number of profile pictures the target user has */
    public int $total_count;

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @var array<array>
     */
    public array $photos;
}

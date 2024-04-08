<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to get custom emoji stickers, which can be used as a
 * forum topic icon by any user. Requires no parameters. Returns an Array
 * of Sticker objects.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetForumTopicIconStickers extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}

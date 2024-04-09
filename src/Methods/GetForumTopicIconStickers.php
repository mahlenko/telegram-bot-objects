<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\Sticker;

/**
 * Use this method to get custom emoji stickers, which can be used as a
 * forum topic icon by any user. Requires no parameters. Returns an Array
 * of <a href="#sticker">Sticker</a> objects.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetForumTopicIconStickers extends TelegramMethod implements MethodsInterface
{
    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];

    /** Response mapping type. */
    public string $response_type = Sticker::class;
}

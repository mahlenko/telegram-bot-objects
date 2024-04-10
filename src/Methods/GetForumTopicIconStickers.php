<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\Sticker;

/**
 * GetForumTopicIconStickers
 *
 * Use this method to get custom emoji stickers, which can be used as a forum topic
 * icon by any user. Requires no parameters. Returns an Array of Sticker objects.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetForumTopicIconStickers implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = [Sticker::class];
}

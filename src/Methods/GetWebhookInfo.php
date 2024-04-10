<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;
use TelegramBotCast\Types\WebhookInfo;

/**
 * GetWebhookInfo
 *
 * Use this method to get current webhook status. Requires no parameters. On
 * success, returns a WebhookInfo object. If the bot is using getUpdates, will
 * return an object with the url field empty.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class GetWebhookInfo implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = WebhookInfo::class;
}

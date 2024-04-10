<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * LogOut
 *
 * Use this method to log out from the cloud Bot API server before launching the
 * bot locally. You must log out the bot before running it locally, otherwise there
 * is no guarantee that the bot will receive updates. After a successful call, you
 * can immediately log in on a local server, but will not be able to log in back to
 * the cloud Bot API server for 10 minutes. Returns True on success. Requires no
 * parameters.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class LogOut implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';
}

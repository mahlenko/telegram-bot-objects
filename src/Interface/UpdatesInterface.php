<?php

declare(strict_types=1);

namespace TelegramBot\Interface;

/**
 * Getting updates
 *
 * There are two mutually exclusive ways of receiving updates for your
 * bot - the getUpdates method on one hand and webhooks on the other.
 * Incoming updates are stored on the server until the bot receives them
 * either way, but they will not be kept longer than 24 hours.
 * Regardless of which option you choose, you will receive
 * JSON-serialized Update objects as a result.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
interface UpdatesInterface
{
}

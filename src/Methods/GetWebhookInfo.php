<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatesInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\WebhookInfo;

/**
 * Use this method to get current webhook status. Requires no parameters.
 * On success, returns a <a href="#webhookinfo">WebhookInfo</a> object.
 * If the bot is using <a href="#getupdates">getUpdates</a>, will return
 * an object with the <em>url</em> field empty.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetWebhookInfo extends TelegramMethod implements UpdatesInterface
{
    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];

    /** Response mapping type. */
    public string $response_type = WebhookInfo::class;
}

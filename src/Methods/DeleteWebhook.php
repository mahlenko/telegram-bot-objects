<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatesInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to remove webhook integration if you decide to switch
 * back to <a href="#getupdates">getUpdates</a>. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class DeleteWebhook extends TelegramMethod implements UpdatesInterface
{
    /** Pass True to drop all pending updates */
    public ?bool $drop_pending_updates;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

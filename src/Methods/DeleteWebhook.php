<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * DeleteWebhook
 *
 * Use this method to remove webhook integration if you decide to switch back to
 * getUpdates. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class DeleteWebhook implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** Pass True to drop all pending updates */
        public bool $drop_pending_updates,
    ) {
    }
}

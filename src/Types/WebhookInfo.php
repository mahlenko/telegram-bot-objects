<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * WebhookInfo
 *
 * Describes the current status of a webhook.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class WebhookInfo implements TelegramTypeInterface
{
    public function __construct(
        /** Webhook URL, may be empty if webhook is not set up */
        public string $url,
        /** True, if a custom certificate was provided for webhook certificate checks */
        public bool $has_custom_certificate,
        /** Number of updates awaiting delivery */
        public int $pending_update_count,
        /** Currently used webhook IP address */
        public ?string $ip_address,
        /** Unix time for the most recent error that happened when trying to deliver an update via webhook */
        public ?int $last_error_date,
        /** Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook */
        public ?string $last_error_message,
        /** Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters */
        public ?int $last_synchronization_error_date,
        /** The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery */
        public ?int $max_connections,
        /**
         * A list of update types the bot is subscribed to. Defaults to all update types except chat_member
         * @var array<string>
         */
        public ?array $allowed_updates,
    ) {
    }
}

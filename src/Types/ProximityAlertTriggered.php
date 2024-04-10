<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ProximityAlertTriggered
 *
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ProximityAlertTriggered implements TelegramTypeInterface
{
    public function __construct(
        /** User that triggered the alert */
        public User $traveler,
        /** User that set the alert */
        public User $watcher,
        /** The distance between the users */
        public int $distance,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents the content of a service message, sent whenever
 * a user in the chat triggers a proximity alert set by another user.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class ProximityAlertTriggered extends TelegramType implements TypesInterface
{
    /** User that triggered the alert */
    public User $traveler;

    /** User that set the alert */
    public User $watcher;

    /** The distance between the users */
    public int $distance;
}

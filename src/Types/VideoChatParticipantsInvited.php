<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about new members invited to
 * a video chat.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class VideoChatParticipantsInvited extends TelegramType implements TypesInterface
{
    /**
     * New members that were invited to the video chat
     *
     * @var array<User>
     */
    public array $users;
}

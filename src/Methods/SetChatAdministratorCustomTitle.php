<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to set a custom title for an administrator in a
 * supergroup promoted by the bot. Returns True on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetChatAdministratorCustomTitle extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;

    /**
     * New custom title for the administrator; 0-16 characters, emoji are not
     * allowed
     */
    public string $custom_title;
}

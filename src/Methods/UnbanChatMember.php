<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to unban a previously banned user in a supergroup or
 * channel. The user will <strong>not</strong> return to the group or
 * channel automatically, but will be able to join via link, etc. The bot
 * must be an administrator for this to work. By default, this method
 * guarantees that after the call the user is not a member of the chat,
 * but will be able to join it. So if the user is a member of the chat
 * they will also be <strong>removed</strong> from the chat. If you don't
 * want this, use the parameter <em>only_if_banned</em>. Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class UnbanChatMember extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target group or username of the target
     * supergroup or channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;

    /** Do nothing if the user is not banned */
    public ?bool $only_if_banned;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'user_id'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

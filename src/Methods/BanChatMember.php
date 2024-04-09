<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to ban a user in a group, a supergroup or a channel.
 * In the case of supergroups and channels, the user will not be able to
 * return to the chat on their own using invite links, etc., unless <a
 * href="#unbanchatmember">unbanned</a> first. The bot must be an
 * administrator in the chat for this to work and must have the
 * appropriate administrator rights. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class BanChatMember extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target group or username of the target
     * supergroup or channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;

    /**
     * Date when the user will be unbanned; Unix time. If user is banned for
     * more than 366 days or less than 30 seconds from the current time they
     * are considered to be banned forever. Applied for supergroups and
     * channels only.
     */
    public ?int $until_date;

    /**
     * Pass True to delete all messages from the chat for the user that is
     * being removed. If False, the user will be able to see messages in the
     * group that were sent before the user was removed. Always True for
     * supergroups and channels.
     */
    public ?bool $revoke_messages;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'user_id'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\UserChatBoosts;

/**
 * Use this method to get the list of boosts added to a chat by a user.
 * Requires administrator rights in the chat. Returns a <a
 * href="#userchatboosts">UserChatBoosts</a> object.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetUserChatBoosts extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the chat or username of the channel (in the
     * format @channelusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'user_id'];

    /** Response mapping type. */
    public string $response_type = UserChatBoosts::class;
}

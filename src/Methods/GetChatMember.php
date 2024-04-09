<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ChatMember;

/**
 * Use this method to get information about a member of a chat. The
 * method is only guaranteed to work for other users if the bot is an
 * administrator in the chat. Returns a <a
 * href="#chatmember">ChatMember</a> object on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetChatMember extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup or channel (in the format @channelusername)
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
    public string $response_type = ChatMember::class;
}

<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object defines the criteria used to request a suitable chat.
 * Information about the selected chat will be shared with the bot when
 * the corresponding button is pressed. The bot will be granted requested
 * rights in the сhat if appropriate <a
 * href="/bots/features#chat-and-user-selection">More about requesting
 * chats »</a>
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class KeyboardButtonRequestChat extends TelegramType implements TypesInterface
{
    /**
     * Signed 32-bit identifier of the request, which will be received back
     * in the ChatShared object. Must be unique within the message
     */
    public int $request_id;

    /**
     * Pass True to request a channel chat, pass False to request a group or
     * a supergroup chat.
     */
    public bool $chat_is_channel;

    /**
     * Optional. Pass True to request a forum supergroup, pass False to
     * request a non-forum chat. If not specified, no additional restrictions
     * are applied.
     */
    public ?bool $chat_is_forum;

    /**
     * Optional. Pass True to request a supergroup or a channel with a
     * username, pass False to request a chat without a username. If not
     * specified, no additional restrictions are applied.
     */
    public ?bool $chat_has_username;

    /**
     * Optional. Pass True to request a chat owned by the user. Otherwise, no
     * additional restrictions are applied.
     */
    public ?bool $chat_is_created;

    /**
     * Optional. A JSON-serialized object listing the required administrator
     * rights of the user in the chat. The rights must be a superset of
     * bot_administrator_rights. If not specified, no additional restrictions
     * are applied.
     */
    public ?ChatAdministratorRights $user_administrator_rights;

    /**
     * Optional. A JSON-serialized object listing the required administrator
     * rights of the bot in the chat. The rights must be a subset of
     * user_administrator_rights. If not specified, no additional
     * restrictions are applied.
     */
    public ?ChatAdministratorRights $bot_administrator_rights;

    /**
     * Optional. Pass True to request a chat with the bot as a member.
     * Otherwise, no additional restrictions are applied.
     */
    public ?bool $bot_is_member;

    /** Optional. Pass True to request the chat's title */
    public ?bool $request_title;

    /** Optional. Pass True to request the chat's username */
    public ?bool $request_username;

    /** Optional. Pass True to request the chat's photo */
    public ?bool $request_photo;
}

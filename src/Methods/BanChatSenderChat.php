<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to ban a channel chat in a supergroup or a channel.
 * Until the chat is <a href="#unbanchatsenderchat">unbanned</a>, the
 * owner of the banned chat won't be able to send messages on behalf of
 * <strong>any of their channels</strong>. The bot must be an
 * administrator in the supergroup or channel for this to work and must
 * have the appropriate administrator rights. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class BanChatSenderChat extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target sender chat */
    public int $sender_chat_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'sender_chat_id'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

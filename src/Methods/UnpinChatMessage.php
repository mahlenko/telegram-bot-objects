<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to remove a message from the list of pinned messages
 * in a chat. If the chat is not a private chat, the bot must be an
 * administrator in the chat for this to work and must have the
 * 'can_pin_messages' administrator right in a supergroup or
 * 'can_edit_messages' administrator right in a channel. Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class UnpinChatMessage extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * Identifier of a message to unpin. If not specified, the most recent
     * pinned message (by sending date) will be unpinned.
     */
    public ?int $message_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\UpdatingMessagesInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to delete a message, including service messages, with
 * the following limitations:<br>- A message can only be deleted if it
 * was sent less than 48 hours ago.<br>- Service messages about a
 * supergroup, channel, or forum topic creation can't be deleted.<br>- A
 * dice message in a private chat can only be deleted if it was sent more
 * than 24 hours ago.<br>- Bots can delete outgoing messages in private
 * chats, groups, and supergroups.<br>- Bots can delete incoming messages
 * in private chats.<br>- Bots granted <em>can_post_messages</em>
 * permissions can delete outgoing messages in channels.<br>- If the bot
 * is an administrator of a group, it can delete any message there.<br>-
 * If the bot has <em>can_delete_messages</em> permission in a supergroup
 * or a channel, it can delete any message there.<br>Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class DeleteMessage extends TelegramMethod implements UpdatingMessagesInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Identifier of the message to delete */
    public int $message_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'message_id'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

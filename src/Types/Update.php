<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\UpdatesInterface;

/**
 * This object represents an incoming update.At most one of the optional
 * parameters can be present in any given update.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Update extends TelegramType implements UpdatesInterface
{
    /**
     * The update's unique identifier. Update identifiers start from a
     * certain positive number and increase sequentially. This ID becomes
     * especially handy if you're using webhooks, since it allows you to
     * ignore repeated updates or to restore the correct update sequence,
     * should they get out of order. If there are no new updates for at least
     * a week, then identifier of the next update will be chosen randomly
     * instead of sequentially.
     */
    public int $update_id;

    /**
     * Optional. New incoming message of any kind - text, photo, sticker,
     * etc.
     */
    public ?Message $message;

    /**
     * Optional. New version of a message that is known to the bot and was
     * edited
     */
    public ?Message $edited_message;

    /**
     * Optional. New incoming channel post of any kind - text, photo,
     * sticker, etc.
     */
    public ?Message $channel_post;

    /**
     * Optional. New version of a channel post that is known to the bot and
     * was edited
     */
    public ?Message $edited_channel_post;

    /** Optional. New incoming inline query */
    public ?InlineQuery $inline_query;

    /**
     * Optional. The result of an inline query that was chosen by a user and
     * sent to their chat partner. Please see our documentation on the
     * feedback collecting for details on how to enable these updates for
     * your bot.
     */
    public ?ChosenInlineResult $chosen_inline_result;

    /** Optional. New incoming callback query */
    public ?CallbackQuery $callback_query;

    /**
     * Optional. New incoming shipping query. Only for invoices with flexible
     * price
     */
    public ?ShippingQuery $shipping_query;

    /**
     * Optional. New incoming pre-checkout query. Contains full information
     * about checkout
     */
    public ?PreCheckoutQuery $pre_checkout_query;

    /**
     * Optional. New poll state. Bots receive only updates about stopped
     * polls and polls, which are sent by the bot
     */
    public ?Poll $poll;

    /**
     * Optional. A user changed their answer in a non-anonymous poll. Bots
     * receive new votes only in polls that were sent by the bot itself.
     */
    public ?PollAnswer $poll_answer;

    /**
     * Optional. The bot's chat member status was updated in a chat. For
     * private chats, this update is received only when the bot is blocked or
     * unblocked by the user.
     */
    public ?ChatMemberUpdated $my_chat_member;

    /**
     * Optional. A chat member's status was updated in a chat. The bot must
     * be an administrator in the chat and must explicitly specify
     * “chat_member” in the list of allowed_updates to receive these
     * updates.
     */
    public ?ChatMemberUpdated $chat_member;

    /**
     * Optional. A request to join the chat has been sent. The bot must have
     * the can_invite_users administrator right in the chat to receive these
     * updates.
     */
    public ?ChatJoinRequest $chat_join_request;
}

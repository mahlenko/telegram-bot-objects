<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\TelegramMethodInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ReactionType;

/**
 * Use this method to change the chosen reactions on a message. Service
 * messages can't be reacted to. Automatically forwarded messages from a
 * channel to its discussion group have the same available reactions as
 * messages in the channel. Returns True on success.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetMessageReaction extends TelegramMethod implements TelegramMethodInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * Identifier of the target message. If the message belongs to a media
     * group, the reaction is set to the first non-deleted message in the
     * group instead.
     */
    public int $message_id;

    /**
     * A JSON-serialized list of reaction types to set on the message.
     * Currently, as non-premium users, bots can set up to one reaction per
     * message. A custom emoji reaction can be used if it is either already
     * present on the message or explicitly allowed by chat administrators.
     *
     * @var array<ReactionType>
     */
    public ?array $reaction;

    /** Pass True to set the reaction with a big animation */
    public ?bool $is_big;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'message_id'];
}

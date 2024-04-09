<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a change of a reaction on a message performed
 * by a user.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class MessageReactionUpdated extends TelegramType implements TypesInterface
{
    /** The chat containing the message the user reacted to */
    public Chat $chat;

    /** Unique identifier of the message inside the chat */
    public int $message_id;

    /**
     * Optional. The user that changed the reaction, if the user isn't
     * anonymous
     */
    public ?User $user;

    /**
     * Optional. The chat on behalf of which the reaction was changed, if the
     * user is anonymous
     */
    public ?Chat $actor_chat;

    /** Date of the change in Unix time */
    public int $date;

    /**
     * Previous list of reaction types that were set by the user
     *
     * @var array<ReactionType>
     */
    public array $old_reaction;

    /**
     * New list of reaction types that have been set by the user
     *
     * @var array<ReactionType>
     */
    public array $new_reaction;
}

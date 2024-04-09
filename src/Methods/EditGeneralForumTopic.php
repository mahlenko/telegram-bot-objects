<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to edit the name of the 'General' topic in a forum
 * supergroup chat. The bot must be an administrator in the chat for this
 * to work and must have <em>can_manage_topics</em> administrator rights.
 * Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class EditGeneralForumTopic extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** New topic name, 1-128 characters */
    public string $name;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'name'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

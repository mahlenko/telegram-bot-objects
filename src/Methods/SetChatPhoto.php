<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InputFile;

/**
 * Use this method to set a new profile photo for the chat. Photos can't
 * be changed for private chats. The bot must be an administrator in the
 * chat for this to work and must have the appropriate administrator
 * rights. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetChatPhoto extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** New chat photo, uploaded using multipart/form-data */
    public InputFile $photo;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'photo'];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

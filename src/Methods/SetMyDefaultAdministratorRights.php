<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ChatAdministratorRights;

/**
 * Use this method to change the default administrator rights requested
 * by the bot when it's added as an administrator to groups or channels.
 * These rights will be suggested to users, but they are free to modify
 * the list before adding the bot. Returns <em>True</em> on success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class SetMyDefaultAdministratorRights extends TelegramMethod implements MethodsInterface
{
    /**
     * A JSON-serialized object describing new default administrator rights.
     * If not specified, the default administrator rights will be cleared.
     */
    public ?ChatAdministratorRights $rights;

    /**
     * Pass True to change the default administrator rights of the bot in
     * channels. Otherwise, the default administrator rights of the bot for
     * groups and supergroups will be changed.
     */
    public ?bool $for_channels;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];

    /** Response mapping type. */
    public string $response_type = 'bool';
}

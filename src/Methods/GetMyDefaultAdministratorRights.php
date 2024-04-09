<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\ChatAdministratorRights;

/**
 * Use this method to get the current default administrator rights of the
 * bot. Returns <a
 * href="#chatadministratorrights">ChatAdministratorRights</a> on
 * success.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class GetMyDefaultAdministratorRights extends TelegramMethod implements MethodsInterface
{
    /**
     * Pass True to get default administrator rights of the bot in channels.
     * Otherwise, default administrator rights of the bot for groups and
     * supergroups will be returned.
     */
    public ?bool $for_channels;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];

    /** Response mapping type. */
    public string $response_type = ChatAdministratorRights::class;
}

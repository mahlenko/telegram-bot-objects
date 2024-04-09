<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a parameter of the inline keyboard button used
 * to automatically authorize a user. Serves as a great replacement for
 * the <a href="/widgets/login">Telegram Login Widget</a> when the user
 * is coming from Telegram. All the user needs to do is tap/click a
 * button and confirm that they want to log in:
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class LoginUrl extends TelegramType implements TypesInterface
{
    /**
     * An HTTPS URL to be opened with user authorization data added to the
     * query string when the button is pressed. If the user refuses to
     * provide authorization data, the original URL without information about
     * the user will be opened. The data added is the same as described in
     * Receiving authorization data.NOTE: You must always check the hash of
     * the received data to verify the authentication and the integrity of
     * the data as described in Checking authorization.
     */
    public string $url;

    /** Optional. New text of the button in forwarded messages. */
    public ?string $forward_text;

    /**
     * Optional. Username of a bot, which will be used for user
     * authorization. See Setting up a bot for more details. If not
     * specified, the current bot's username will be assumed. The url's
     * domain must be the same as the domain linked with the bot. See Linking
     * your domain to the bot for more details.
     */
    public ?string $bot_username;

    /**
     * Optional. Pass True to request the permission for your bot to send
     * messages to the user.
     */
    public ?bool $request_write_access;
}

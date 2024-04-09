<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object represents a service message about a user allowing a bot
 * to write messages after adding it to the attachment menu, launching a
 * Web App from a link, or accepting an explicit request from a Web App
 * sent by the method <a
 * href="/bots/webapps#initializing-mini-apps">requestWriteAccess</a>.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class WriteAccessAllowed extends TelegramType implements TypesInterface
{
    /**
     * Optional. True, if the access was granted after the user accepted an
     * explicit request from a Web App sent by the method requestWriteAccess
     */
    public ?bool $from_request;

    /**
     * Optional. Name of the Web App, if the access was granted when the Web
     * App was launched from a link
     */
    public ?string $web_app_name;

    /**
     * Optional. True, if the access was granted when the bot was added to
     * the attachment or side menu
     */
    public ?bool $from_attachment_menu;
}

<?php
namespace TelegramBotCast\Types;

use TelegramBotCast\Interface\TelegramTypeInterface;

/**
 * ChatMember
 *
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 *  - ChatMemberOwner
 *  - ChatMemberAdministrator
 *  - ChatMemberMember
 *  - ChatMemberRestricted
 *  - ChatMemberLeft
 *  - ChatMemberBanned
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class ChatMember implements TelegramTypeInterface
{
}

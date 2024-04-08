<?php

declare(strict_types=1);

namespace TelegramBot\Interface;

/**
 * Updating messages
 *
 * The following methods allow you to change an existing message in the
 * message history instead of sending a new one with a result of an
 * action. This is most useful for messages with inline keyboards using
 * callback queries, but can also help reduce clutter in conversations
 * with regular chat bots.
 * Please note, that it is currently only possible to edit messages
 * without reply_markup or with inline keyboards.
 *
 *
 * @version Bot API 7.2
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
interface UpdatingMessagesInterface
{
}

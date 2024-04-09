<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\InlineModeInterface;
use TelegramBot\TelegramMethod;
use TelegramBot\Types\InlineQueryResult;
use TelegramBot\Types\SentWebAppMessage;

/**
 * Use this method to set the result of an interaction with a <a
 * href="/bots/webapps">Web App</a> and send a corresponding message on
 * behalf of the user to the chat from which the query originated. On
 * success, a <a href="#sentwebappmessage">SentWebAppMessage</a> object
 * is returned.
 *
 * @version Telegram Bot Casts v2.0.0 (Bot API 7.2)
 * @author Sergey Makhlenko <https://github.com/mahlenko>
 */
final class AnswerWebAppQuery extends TelegramMethod implements InlineModeInterface
{
    /** Unique identifier for the query to be answered */
    public string $web_app_query_id;

    /** A JSON-serialized object describing the message to be sent */
    public InlineQueryResult $result;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['web_app_query_id', 'result'];

    /** Response mapping type. */
    public string $response_type = SentWebAppMessage::class;
}

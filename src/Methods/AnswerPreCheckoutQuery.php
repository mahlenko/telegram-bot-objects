<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\PaymentsInterface;
use TelegramBot\TelegramMethod;

/**
 * Once the user has confirmed their payment and shipping details, the
 * Bot API sends the final confirmation in the form of an Update with the
 * field pre_checkout_query. Use this method to respond to such
 * pre-checkout queries. On success, True is returned. Note: The Bot API
 * must receive an answer within 10 seconds after the pre-checkout query
 * was sent.
 *
 * Bot API 7.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class AnswerPreCheckoutQuery extends TelegramMethod implements PaymentsInterface
{
    /** Unique identifier for the query to be answered */
    public string $pre_checkout_query_id;

    /**
     * Specify True if everything is alright (goods are available, etc.) and
     * the bot is ready to proceed with the order. Use False if there are any
     * problems.
     */
    public bool $ok;

    /**
     * Required if ok is False. Error message in human readable form that
     * explains the reason for failure to proceed with the checkout (e.g.
     * "Sorry, somebody just bought the last of our amazing black T-shirts
     * while you were busy filling out your payment details. Please choose a
     * different color or garment!"). Telegram will display this message to
     * the user.
     */
    public ?string $error_message;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['pre_checkout_query_id', 'ok'];
}

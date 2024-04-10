<?php
namespace TelegramBotCast\Methods;

use TelegramBotCast\Interface\TelegramMethodInterface;

/**
 * AnswerPreCheckoutQuery
 *
 * Once the user has confirmed their payment and shipping details, the Bot API
 * sends the final confirmation in the form of an Update with the field
 * pre_checkout_query. Use this method to respond to such pre-checkout queries. On
 * success, True is returned. Note: The Bot API must receive an answer within 10
 * seconds after the pre-checkout query was sent.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final readonly class AnswerPreCheckoutQuery implements TelegramMethodInterface
{
    public const RESPONSE_TYPE = 'true';

    public function __construct(
        /** Unique identifier for the query to be answered */
        public ?string $pre_checkout_query_id,
        /**
         * Specify True if everything is alright (goods are available, etc.) and the bot is
         * ready to proceed with the order. Use False if there are any problems.
         */
        public ?bool $ok,
        /**
         * Required if ok is False. Error message in human readable form that explains the
         * reason for failure to proceed with the checkout (e.g. "Sorry, somebody just
         * bought the last of our amazing black T-shirts while you were busy filling out
         * your payment details. Please choose a different color or garment!"). Telegram
         * will display this message to the user.
         */
        public string $error_message,
    ) {
    }
}

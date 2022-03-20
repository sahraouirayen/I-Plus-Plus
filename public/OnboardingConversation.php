<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{

    protected $firstname;

    public function askFirstname()
    {
        $this->ask('Hi, what is your name?', function($answer) {
            $firstName = $answer->getText();
            $this->say('Nice to meet you '.$firstName);

            
        });
        $this->ask('Do you want to check our last Promotions', [
            [
                'pattern' => 'yes|yep|oui|of course',
                'callback' => function () {
                    $this->say('<a href="/shop">check our stock</a>');
                }
            ],
            [
                'pattern' => 'nah|no|nope|non',
                'callback' => function () {
                    $this->say('Okay no Problem, we still have something else');
                }
            ]
        ]

        );
    }


    public function run()
    {
        $this->askFirstname();
    }
}

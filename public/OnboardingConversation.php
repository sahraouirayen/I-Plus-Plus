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
            $this->say('Do you want to check our promotions '.$firstName);
            if(strcmp($answer->getText(),"yes")){
                $this->say('Okay we will direct you');
            }else if($answer->getText() == "no"){
                $this->say('Okay do you want to check our last event');
            }
            
        });
    }


    public function run()
    {
        $this->askFirstname();
    }
}

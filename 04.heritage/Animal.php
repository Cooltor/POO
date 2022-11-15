<?php

class Animal {

    protected function deplacement() {

        return "Je me déplace <br><hr>";

    }

    public function manger() {

        return "Je mange chaque jour <br><hr>";

    }

}



class Elephant extends Animal {

    public function quiSuisJe() {

        return "Je suis un éléphant et " . $this->deplacement();

    }

}


class Chat extends Animal {

    public function quiSuisJe() {

        return "Je suis un chat <br><hr>";

    }

    public function manger() {

        return "Je mange comme un chat <br><hr>";

    }

}



$elephant = new Elephant;
echo $elephant->quiSuisJe();
echo $elephant->manger();

$chat = new Chat;
echo $chat->quiSuisJe();
echo $chat->manger();



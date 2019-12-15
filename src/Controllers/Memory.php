<?php

namespace Controllers;

use Constants\DBConstants;

class Memory
{

    public $data;

    private function home()
    {
        $this->data['title'] = 'Memory O\'Clock !';
        $this->data['game_duration'] = DBConstants::GAME_DURATION;
        if (isset($_POST['name']) && ($_POST['name'] == '')) {
            $this->data['form_error'] = 'Tu dois indiquer un nom !';
        }
        require __DIR__ . '/../Views/header.php';
        require __DIR__ . '/../Views/home_view.php';
        require __DIR__ . '/../Views/footer.php';
    }

    private function game()
    {
        $this->data['title'] = 'Memory O\'Clock ! - Partie en cours';
        require __DIR__ . '/../Views/header.php';
        require __DIR__ . '/../Views/game_view.php';
        require __DIR__ . '/../Views/footer.php';
    }

    public function display()
    {
        if (isset($_POST['name']) && ($_POST['name'] != '')) {
            $this->game();
        } else {
            $this->home();
        }
    }
}

<?php

namespace Matth\ProjectWithRooter\Controller;

use Matth\ProjectWithRooter\Controller\Traits\RenderViewTrait;

class Controller {

    use RenderViewTrait;

    /**
     * Show the home page
     */
    public function homePage() {
        $this->render('home', 'Accueil');
    }

    /**
     * Show the article page
     * @param $id
     */
    public function articlePage($id) {
        $this->render('article', 'Article', ['id' => $id]);
    }

}
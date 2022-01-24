<?php

namespace Matth\ProjectWithRooter\Controller\Traits;

trait RenderViewTrait {

    /**
     * Show any asked view
     * @param string $view
     * @param string $title
     * @param array|null $var
     */
    public function render(string $view, string $title, array $var = null): void {
        ob_start();
        require_once  "../templates/$view.php";
        $html = ob_get_clean();
        require_once '../templates/_partials/base.php';
    }
}
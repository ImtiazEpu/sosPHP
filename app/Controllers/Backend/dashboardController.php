<?php
namespace App\Controllers\Backend;

use App\Controllers\Controller;

class dashboardController extends Controller {
    public function getIndex()
    {
        $this->view("dashboard");
    }
}
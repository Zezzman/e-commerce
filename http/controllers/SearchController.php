<?php
namespace ECommerce\Controllers;

use System\Controller;
use System\Helpers\HTTPHelper;
/**
 * 
 */
class SearchController extends Controller
{
    public function Index()
    {
        return $this->view('search/index');
    }
}
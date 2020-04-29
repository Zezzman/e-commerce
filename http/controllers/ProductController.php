<?php
namespace ECommerce\Controllers;

use System\Controller;
use System\Helpers\HTTPHelper;
/**
 * 
 */
class ProductController extends Controller
{
    public function Index()
    {
        return $this->view('product/index');
    }
    public function Featured()
    {
        return $this->view('product/featured');
    }
}
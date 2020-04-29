<?php
namespace ECommerce\Controllers;

use System\Controller;
use System\Helpers\HTTPHelper;
/**
 * 
 */
class HomeController extends Controller
{
    public function Index()
    {
        return $this->view('home');
    }
    public function Document()
    {
        return $this->view('document');
    }
    public function About()
    {
        return $this->view('about');
    }
    public function Contact()
    {
        return $this->view('contact');
    }
}
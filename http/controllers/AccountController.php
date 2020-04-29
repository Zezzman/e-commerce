<?php
namespace ECommerce\Controllers;

use System\Controller;
use System\Helpers\HTTPHelper;
/**
 * 
 */
class AccountController extends Controller
{
    public function Index()
    {
        return $this->view('account/account');
    }
    public function Dashboard()
    {
        return $this->view('account/dashboard');
    }
    public function Profile()
    {
        return $this->view('account/profile');
    }
    public function Checkout()
    {
        return $this->view('account/checkout');
    }
    public function History()
    {
        return $this->view('account/history');
    }
    public function Privacy()
    {
        return $this->view('account/privacy');
    }
    public function Security()
    {
        return $this->view('account/security');
    }
    public function Notifications()
    {
        return $this->view('account/notifications');
    }
    public function Contact()
    {
        return $this->view('account/contact-details');
    }
    public function Billing()
    {
        return $this->view('account/billing-method');
    }
    public function TwoFactorAuth()
    {
        return $this->view('account/2-factor-auth');
    }
}
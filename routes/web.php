<?php
/* $this->get('uri', 'Controller@Action'); */
/**
 *  Home Page
 */
$this->get('/', 'Home@Index');
$this->get('home/', 'Home@Index');
$this->get('about/', 'Home@About');
$this->get('contact/', 'Home@Contact');
/**
 *  Search Pages
 */
$this->get('search/', 'Search@Index');
$this->get('search/{query}', 'Search@LookUp');
/**
 *  Product Pages
 */
$this->get('products', 'Product@Featured');
$this->get('product/{id}', 'Product@Index');
/**
 *  Checkout Page
 */
$this->get('checkout/', 'Account@Checkout');
/**
 *  Account Pages
 */
$this->get('dashboard/', 'Account@Dashboard');
$this->get('profile/', 'Account@Profile');
$this->get('account/', 'Account@Index');
$this->get('account/history/', 'Account@History');
$this->get('account/privacy/', 'Account@Privacy');
$this->get('account/security/', 'Account@Security');
$this->get('account/contactDetails/', 'Account@Contact');
$this->get('account/billingMethod/', 'Account@Billing');
$this->get('account/notifications/', 'Account@Notifications');
$this->get('account/2FactorAuth/', 'Account@TwoFactorAuth');
/**
 *  Documentation
 */
$this->get('document/', 'Home@Document');
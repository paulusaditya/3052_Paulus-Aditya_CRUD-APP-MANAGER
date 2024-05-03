<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

# GET
Router::url('/', 'get', function () { return view('index.php'); });
Router::url('login', 'get', 'index.php');
Router::url('register', 'get', 'register.php');
Router::url('dashboard', 'get', 'dashboard.php');
Router::url('dashboard/logout', 'get', 'AuthController::logout');
Router::url('contacts/add', 'get', 'adddata.php::add');
Router::url('contacts/edit', 'get', 'editdata.php::edit');
Router::url('contacts/remove', 'get', 'deletedata.php::delete');

# POST
Router::url('login', 'post', 'login.php');
Router::url('register', 'post', 'register1.php');
Router::url('public/dashboard/add', 'post', 'adddata.php::Add');
Router::url('public/dashboard/edit', 'post', 'editdata.php::Edit');

new Router();
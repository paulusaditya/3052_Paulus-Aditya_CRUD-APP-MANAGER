<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

# GET
Router::url('/', 'get', function () { return view('home'); });
Router::url('login', 'get', 'AuthController::index');
Router::url('register', 'get', 'AuthController::register');
Router::url('dashboard', 'get', 'DashboardController::dashboard');
Router::url('dashboard/logout', 'get', 'AuthController::logout');
Router::url('student/add', 'get', 'ContactController::add');
Router::url('student/edit', 'get', 'ContactController::edit');
Router::url('student/remove', 'get', 'ContactController::remove');
Router::url('freshdb', 'get', 'freshdb');
Router::url('report', 'get', 'ContactController::report');

# POST
Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('register', 'post', 'AuthController::saveRegister');
Router::url('student/add', 'post', 'ContactController::saveAdd');
Router::url('student/edit', 'post', 'ContactController::saveEdit');

new Router();
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
Router::url('student/add', 'get', 'StudentController::add');
Router::url('student/edit', 'get', 'StudentController::edit');
Router::url('student/remove', 'get', 'StudentController::remove');
Router::url('freshdb', 'get', 'freshdb');
Router::url('report', 'get', 'StudentController::report');

# POST
Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('register', 'post', 'AuthController::saveRegister');
Router::url('student/add', 'post', 'StudentController::saveAdd');
Router::url('student/edit', 'post', 'StudentController::saveEdit');

new Router();
<?php

/* 
 * Jaroslav Kulikov for ino_php_cource
 * 2017
 */

?>

@extends('main')

@section('content')
    <h2>Авторизуйтесь пожалуйста.</h2>
        <form method="post" action="auth.php" >
        <label>Логин</label>
            <input type="text" name="userName" />
        <label>Пароль</label>
            <input type="password" name="userPassword" />
            <button type="submit">Войти</button>
        </form>
        <br>Или продолжить как <a href="guest.php">гость</a>?
 @stop
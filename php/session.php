<?php
function _session_regenerate_id() {
    session_destroy();
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    $sid = session_create_id('barber-');
    $_SESSION['deleted_time'] = time();
    session_commit();
    ini_set('session.use_strict_mode', 0);
    session_id($sid);
    session_start();
}

function session_init() {
    //$sid = $_COOKIE['PHPSESSID'] ?: '';
    //session_id($sid);
    session_start();
    if (!empty($_SESSION['deleted_time']) && $_SESSION['deleted_time'] < time() - 180) {
        _session_regenerate_id();
    }
}
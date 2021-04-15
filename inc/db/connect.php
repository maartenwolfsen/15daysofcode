<?php

require_once '../../etc/env.php';

function getConnection() {
    $env = getConfig();

    return mysqli_connect(
        $env['database']['host'],
        $env['database']['user'],
        $env['database']['password'],
        $env['database']['name']
    );
}
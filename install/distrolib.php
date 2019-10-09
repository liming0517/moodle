<?php 

function distro_get_config() {

    $config = new stdClass();

    $config->installername = 'Moodle Windows Installer';
    $config->installerversion = '2019052000';
    $config->packname = 'Xampp Portable';
    $config->packversion = '7.1.10-0 Portable';
    $config->webname = 'Apache';
    $config->webversion = '2.4.28';
    $config->phpname = 'PHP';
    $config->phpversion = '7.1.10 (VC14 X86 32bit thread safe) + PEAR';
    $config->dbname = 'MariaDB';
    $config->dbversion = '10.1.28';
    $config->moodlerelease = '3.7.1 (Build: 20190708)';
    $config->moodleversion = '2019052001.00';
    $config->dbtype='mariadb';
    $config->dbhost='localhost';
    $config->dbuser='root';

    return $config;
}

function distro_pre_create_db($database, $dbhost, $dbuser, $dbpass, $dbname, $prefix, $dboptions, $distro) {

/// We need to change the database password in windows installer, only if != ''
    if ($dbpass !== '') {
        try {
            if ($database->connect($dbhost, $dbuser, '', 'mysql', $prefix, $dboptions)) {
                $sql = "UPDATE user SET password=password(?) WHERE user='root'";
                $params = array($dbpass);
                $database->execute($sql, $params);
                $sql = "flush privileges";
                $database->execute($sql);
            }
        } catch (Exception $ignore) {
        }
    }
}
?>

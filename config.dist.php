<?php
namespace WEBCRAFT;
function democracy_deutschland_config(){
    return array(   array(\config_ids::SYS_CONFIG_ERRORREPORTING,       E_ALL | E_STRICT),
                    array(\config_ids::SYS_CONFIG_PATH_BASEURL,         'https://test.webcraft-media.de/democracy_deutschland/'),
                    array(\config_ids::SYS_CONFIG_PATH_BASEPATH,        '/home/web/web/test/democracy_deutschland/'),
                    array(\config_ids::SYS_CONFIG_DB_TYPE,              \SYSTEM\CONFIG\config_ids::SYS_CONFIG_DB_TYPE_MYS),
                    array(\config_ids::SYS_CONFIG_DB_HOST,              '127.0.0.1'),
                    array(\config_ids::SYS_CONFIG_DB_PORT,              ''),
                    array(\config_ids::SYS_CONFIG_DB_USER,              'db_user'),
                    array(\config_ids::SYS_CONFIG_DB_PASSWORD,          'db_pw'),
                    array(\config_ids::SYS_CONFIG_DB_DBNAME,            'db_name'),
                    array(\config_ids::SYS_SAI_CONFIG_PROJECT,          'democracy_deutschland'),
                    array(\config_ids::SYS_CONFIG_PATH_SYSTEMPATHREL,   'lib/system/'),
                    array(\config_ids::SYS_CONFIG_PATH_CACHE,    	'/home/web/web/test/democracy_deutschland/democracy/files/cache/'),
                    array(\config_ids::SYS_CONFIG_LANGS,                array('deDE')),
                    array(\config_ids::SYS_CONFIG_DEFAULT_LANG,         'deDE'),
                    array(\config_ids::SYS_CRON_LOG2SQLITE_PATH,        '/home/web/web/log/democracy_deutschland/'),
                    array(\config_ids::DEMOCRACY_EMAIL_CONTACT,         array(  "imap"      => "HOST:993/imap/ssl",
                                                                                "host"      => "",
                                                                                "port"      => 465,
                                                                                "auth"      => true,
                                                                                "username"  => "",
                                                                                "password"  => "")),
                    array(\config_ids::DEMOCRACY_EMAIL_PROTOTYPING,     array(  "imap"      => "HOST:993/imap/ssl",
                                                                                "host"      => "",
                                                                                "port"      => 465,
                                                                                "auth"      => true,
                                                                                "username"  => "",
                                                                                "password"  => "")),
                    array(\config_ids::DEMOCRACY_EMAIL_CROWDFUNDING,    array(  "imap"      => "HOST:993/imap/ssl",
                                                                                "host"      => "",
                                                                                "port"      => 465,
                                                                                "auth"      => true,
                                                                                "username"  => "",
                                                                                "password"  => "")),
                    array(\config_ids::DEMOCRACY_EMAIL_KRUEGER,         array(  "imap"      => "HOST:993/imap/ssl",
                                                                                "host"      => "",
                                                                                "port"      => 465,
                                                                                "auth"      => true,
                                                                                "username"  => "",
                                                                                "password"  => ""))
                );
}
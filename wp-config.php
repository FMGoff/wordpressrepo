<?php

define('DB_NAME', 'wordpressDB');

define('DB_USER', 'fmgoff');

define('DB_PASSWORD', '1qaz2wsx!@QWASZX');

define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8mb4');

define('DB_COLLATE', '');

define('AUTH_KEY',         'CR{/}C_W{L}jVleux.RL%>f!<tAZRTH< ejO?163w=>S0&c[3#YOAi*Je>;.V,#;');
define('SECURE_AUTH_KEY',  'E/(%IQiJkE&e/bz9r2s&F?tf5sp.)]Uk=4%PKx.H*5NtONCLLz$:q^g+*7M/hj-5');
define('LOGGED_IN_KEY',    'c.3Vjiv^_<JTLAmx;=33-c{6lCZ,BlMdWN&k]Cl/|*[qdzd)E/ZfyC6bI/]g9;=a');
define('NONCE_KEY',        'T(DLi]p:0TjBs_rcY9mF*X!H4-0/VB->=eVMyN#t#gjfayZcx4yc]*eAk[_TUJCP');
define('AUTH_SALT',        '-HJ48)A*hY!,00 RA!=C.(($;)Pm9AVuU%_n&yY8{KzF4A42NUZTIG__Sf:tQc~f');
define('SECURE_AUTH_SALT', 'Ars)+kHA+lFawzmnHlxe]]3z5;@VNwiL#P`?jFM-&=s#H3/}(}yZk6m[c?=@zt=}');
define('LOGGED_IN_SALT',   'lckCBJusG6}Ug@<MsePGD ,:gQKB~!8FJ&6N]~HZs>b(plx!1<7=g;:,=e& [Z*Z');
define('NONCE_SALT',       'm,0[%se+a`LdokChebfEf(+ys;j-&SGW}&&|AgIR#>ii>cL0Qn.<>sWo-tfiXg93');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

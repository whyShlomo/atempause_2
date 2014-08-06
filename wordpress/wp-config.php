<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'atempause');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'adminQrtE8J7');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'TKMGdABeb34I');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         '95F+LmO<_EX51(t+#)jXpxy/<{BY]5yMi_mid#VQ7y<0tZi1^ck?%:iz=]:Fv`vo');
define('SECURE_AUTH_KEY',  '-n34|+s|O&I(JyEd<i#HKHous0t.:|dx[.6R&dy=J1SAqZwu+qHU=:bY/ALS$-tL');
define('LOGGED_IN_KEY',    'ySn`?fo ,yT@llv@XeLv5-6:q9C%|wpf^v/P-4E+|S8]sC!6z1/+E7z%53EP}2.q');
define('NONCE_KEY',        'TZt^gK8z(pC.7E[`P!eX60C%zgtn?.Z;HfSz^|j~t~S;K}XR,G!rYb(*~IoZ37w7');
define('AUTH_SALT',        ' h(BN2TXB|^Ihd@[N3(hnY[b6nV~3bd%>Og*RSX/<.olqGppTAj!PI1}mVelw_-I');
define('SECURE_AUTH_SALT', 'SR-na~L0nGIDtIaQ=Dz`%HzfJgmrt@JmzUVK6S]>9T6kTC*BuwFW7D<r1Bt-uguH');
define('LOGGED_IN_SALT',   '9-;-#BP)9|ehVg%/i ||[GYzCHYOjOW ,rG$k<y0Kl7X.U|j`3NCF_5Q~VTES>bG');
define('NONCE_SALT',       '$kQ@A]~^3=UYeG5CP.jmDJ|(12n96D;7bG/f|hntG,Bnj6;K1Tb HCM-i!NUS,NM');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni database
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'esame-molinari' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', 'root' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/But`EBe !Ft?VkEOHVxB1!pD-[yW&KIm)qCzh9Kgz*SF:P%*=m;/>gG5k#x8R36' );
define( 'SECURE_AUTH_KEY',  'QDir!5ca~o,z61c2]lI!UJvrZ^5`?/:rc ?}&y+p- X#3mFJtGJ1W:%;l.~_TJO_' );
define( 'LOGGED_IN_KEY',    ':) 2C4irlxtk,Mec1dsl_5rycj`mQ@(I{%T#aSLKt?g~o%4WR5R$0,_%fCj-;Sle' );
define( 'NONCE_KEY',        'H/2vkGuodRJR+)x2*taU2@R=u=}{Yt&|3{>33wXb+GS mM!9bOlVGK6tUg9qb]$;' );
define( 'AUTH_SALT',        'cYkIP6q3Sx+]hw#3;l*rWON,(`Oam#Bo`<c_3rF=A?!#.)q}d]K~[Y $}Hcn/jUq' );
define( 'SECURE_AUTH_SALT', 'V0Q`|a?4?le8[DSs>.| 0o%c,|<{c<T2?{FQa`gj=r7mJ1%o7x0:jF*d4xkEr*q>' );
define( 'LOGGED_IN_SALT',   'aq%Wb`j)jXD^$v&O>Kl`6]p`EyKDYoIM}6>Q?g`^]SI-n2E+gRP0t=F.+6dlxGNo' );
define( 'NONCE_SALT',       '%PkR3URu6.b(7uvg)OUHi!Ufy{=-r U{/h(v!{kqzh93EXJTjZ >.d4.fC03f)Zs' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'em_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');

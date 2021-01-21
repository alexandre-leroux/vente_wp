<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'vente_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(lI;<xywCgXwwHm9]Q&Wgh~!LZ,ohZgOJ;OVp?js]j#0)j#4I5F+Sm5*M;W*5:}-' );
define( 'SECURE_AUTH_KEY',  'fPPzypj)AwWEHi#@U!]gdaQ8m;@Z_eW]rzhKe&8Lh]Zg|*!EU2`5Z&D^@}vx2J7>' );
define( 'LOGGED_IN_KEY',    '7E`8J8bh{z&3Jj.r!/5 ;MA7v}dP=(vAQA!K3:65T1xp`BN%M.iRF>[7owy!4W)s' );
define( 'NONCE_KEY',        'Y/(gn#HN&D<VHSydr;*$q3Q5O|=GRL#X;&`,V_Y}vzJ1k~yNM`% d@LCONR3QHZ>' );
define( 'AUTH_SALT',        'Wi?Y:iDM2c|e?o(jZFtD@d#ByShgA)$9u/y7h3410-RP&R_#J];`<7fG5f,:+hPT' );
define( 'SECURE_AUTH_SALT', 't:@;CO= 9x!PDz !e]SO,}3haAP$5|)QJ]Y+RP<!&r7 -|}cKVL*n8,A|Y(xcJ::' );
define( 'LOGGED_IN_SALT',   ']L)7nmh1liYkAE8-(@8CE~Wjw!Q^-Rjc;r_!x]FY@MR+lld$H5M%_kNS^d kL`O)' );
define( 'NONCE_SALT',       'E_[5P-he{^corMvAe0C6ZP ckv?socFo0e,XreUj*fiWqrK3lj+~+@cgb-=|D3IV' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'wordpress2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ogFDX QW))5/Br++-}HLDQrLc2Q xpJ$v2x9zHN<l 3`3ypsvU,+z8cH!dx>%)}=' );
define( 'SECURE_AUTH_KEY',  '|sIl~:_8crdxV{qWN#MI$m=R^ma%p&~xPLlt 6]M+ !Xfxis4 !VC58@ClZ!{FqG' );
define( 'LOGGED_IN_KEY',    'TFo%7e%`BVP ;)/5WLU4BpxrDzD)W~a4k7BT?r[NQR$Ypwy3A!$N^5Ti246t7nLM' );
define( 'NONCE_KEY',        'o<J~Cz#6+;+;-{`0A*!kp*tq$.@Bc&nj:L~*.po^ZBFmn^Kr;$@&Y.Gp.*-VW72W' );
define( 'AUTH_SALT',        '|V+9taeNgk1W(`1 [gUy,o>Uc,*|0QWfniy,%L,]-TNm4H6j]Kr++N8=<q~#yoj:' );
define( 'SECURE_AUTH_SALT', ';8Vm@WRB1!^F..D3j zTWcERK?i7<[UmgibLC:z;}iE3DdzqY[IfsRFOL^VE^**b' );
define( 'LOGGED_IN_SALT',   '6VBr[[OgT~{|7C|7VQhkV)l+nIPzh-(h*JmEvnBQQg9RPekC7&A@I_}S0DZ96@iz' );
define( 'NONCE_SALT',       'v|%zdWj0[RNce6NTj@7E*:>o+JP.-e0LnCIP*3V[dP#ukN,<Ih=kD-0znc=QZb]~' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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

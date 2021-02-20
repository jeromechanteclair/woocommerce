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
define( 'DB_NAME', 'woocommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1:3308' );

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
define( 'AUTH_KEY',         '4+h?_N~:&{Y.G/n1p~)JM~q&0^!Q-$a]j-h:|7uz`B@gc.^Ud6b*lsxzrp+OcBE:' );
define( 'SECURE_AUTH_KEY',  'EG<3shkNN,e8KV46rPY@nHM)!g8N7{{eoor;kCTw),{?u8sXoCEkN l(&b`~(F7;' );
define( 'LOGGED_IN_KEY',    '0EdWUUz:lFXC9.cxobx4Q2??AV`PF+[nx0~z|+D~<K+V$:O8BRs<ASNZXwXagBbn' );
define( 'NONCE_KEY',        'G>vy^R4CT/]$Sb6|S<1)FMI8lQU_HCcN[,L&HF,W&P GRG8q-R*::2q1LDzKAq[U' );
define( 'AUTH_SALT',        '|VH*=;Eib$Z,fCm}QO}L{tJ)inzYIu!#gD= +Omj>~Sa4es&~J6I6ebfnLY#bvfk' );
define( 'SECURE_AUTH_SALT', 'U/p*P/pC*_cTD@1s@ZWd-,[ARoJQCTQXj*e102BR,Fa9_Uva/$}w0=cQ>!/,7/[Z' );
define( 'LOGGED_IN_SALT',   '-;f[NB]H]iA7!VAl^2>vRK|E:#_a5,v7S3Xp9/R(SBT.xfa,1BAvmY@7:_V9XTOP' );
define( 'NONCE_SALT',       'u:I{s0kO}?h*D>h(%r*s- E}fPoB .qWpH]o-GQVP?^`KH-nF}`jD ZQzkTEcC]R' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wc_';

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

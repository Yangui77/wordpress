<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'kiddizy');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y#r:beVVND=TyQW+E1qtD[qE~*$hds7KQER#.I)UsLI5F:77U1J=|V)N{L8PIzu>');
define('SECURE_AUTH_KEY',  'AjuDypzc#u#5cTK(Fp3HtII,jKnh.yMk7q^|Vl]oC%+M6I].[|xs-y)}x$N+ZhKK');
define('LOGGED_IN_KEY',    '5wYZ>&fdrNv(Pd;N!P>~E8$:&<=I>=, IG>+Wr;aF*`y^D35Glv~N~`&X#U#$,p}');
define('NONCE_KEY',        'XCjXSJ#|HT>m!Sno:,}~9z4K#%n|9w6XdYEgNqfxUHA3F!m}1.C!v%^@()}gR|9I');
define('AUTH_SALT',        'eu)V 6$M4MQQ#`|YYhyRB*~IKnn+9&{]$sG]$/p0XU*`2:Ow,o MO)aU<E*wEdcw');
define('SECURE_AUTH_SALT', 'Y>vg)G6n%6iYBq!MsMS0O^o6B9)e%$Ru~:{Nsgbs3:#_=VS0;O;AckIu0-_4Z[{v');
define('LOGGED_IN_SALT',   '_ ,$?dGP^7lD(&cKy<.l@Ng*Z9%F@|hYm wnlfuwQP,2l/D[ejuA2bu3mdzlQK{4');
define('NONCE_SALT',       '.Sm?ZIJ+f8lp!@|rQO>{}E31~x_:N=O6 ;BR#P }TH8Dk%hNB0q}4b$`KWqdcJ;h');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
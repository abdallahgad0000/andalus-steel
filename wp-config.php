<?php
/**
 * إعدادات ووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'andalus' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * تغيير هذه العبارات إلى عبارات فريدة مختلفة!
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * يمكنك تغيير هذه في أي وقت لإلغاء جميع ملفات تعريف الارتباط الموجودة. سيؤدي هذا إلى إجبار جميع المستخدمين على تسجيل الدخول مرة أخرى.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gLPJHROo9BRoW[70<@ mR1EJ:xxRJQV$z#y6 ?! DT -7O,F=P]ZUe)0xa,.,T=(' );
define( 'SECURE_AUTH_KEY',  'R*M!x@nqF4+aG-%Bx1Yt7}$8c*6;zyA@PTPorY>u@c.+. PeWPHlb}(&$0Phw`Er' );
define( 'LOGGED_IN_KEY',    'Kg:X(xAq71Nd-x6v?R)3UKe_xM6U~d.tW-m<).YQ!_B2h|2lQb]vJOqbWnwgRiyo' );
define( 'NONCE_KEY',        'z}CYn>6IsRM6rNBI&_) syChD8Z!k`>);^o N#Mr&J~T|iM!{.[G`]i<#Hh?`=|7' );
define( 'AUTH_SALT',        'E-[hPUnSmA(D0F&:aS:FYC(i8tcM%26SO>Lqv*(c5&U:*#YAq{sFe]PIFmC*`I;X' );
define( 'SECURE_AUTH_SALT', 'g5k`n@-Pv* MV,:f,Oa>u%.?53G-;=k+}yU/FsHR7qSc?3jFAl!r>j$X`@;Dy`Ah' );
define( 'LOGGED_IN_SALT',   'LWcJ<BX`8v9#q>#MdMoww[xrQ(vFV{8P9Xotz3-Ds=VT,Xe4aHp~zK.U,(Kdvo)M' );
define( 'NONCE_SALT',       'h1MsZ%m![cW*|Wg_ t`q(bKm-T5]%R5v_3)Ix<TU}h<RK*l0t_stCPp@BU(!0 xL' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';

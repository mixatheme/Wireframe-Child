<?php
/**
 * Core_Language config for modules built with Wireframe Suite for WordPress.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Child
 * @author    MixaTheme, Tada Burke
 * @version   0.1.0 Wireframe_Child
 * @copyright 2016 MixaTheme
 * @license   GPL-2.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/Wireframe
 * @see       https://github.com/mixatheme/wireframe-theme
 * @see       https://github.com/mixatheme/wireframe-child
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Namespaces.
 *
 * You should namespace configs to access your objects. If you change your
 * namespace, don't forget to `use` any namespace aliases you may need.
 * Also, if you autoload, don't forget to re-compile Composer.
 *
 * Examples:
 *
 * 		namespace MyCompany\MyTheme;
 * 		use MixaTheme\Wireframe\Theme\Core_Enqueue;
 * 		use Walker_Nav_Menus;
 * 		use wpdb;
 *
 * Note: We chose to not give Wireframe Child its own namespace so we can just
 * copy over parent config files and easily overload them.
 *
 * @since 5.3.0 PHP
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Theme
 * @since 0.1.0 Wireframe_Child
 */
namespace MixaTheme\Wireframe\Theme;

/**
 * No direct access to this file.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Theme
 * @since 0.1.0 Wireframe_Child
 */
defined( 'ABSPATH' ) or die();

/**
 * Stores array of default config data for passing into objects.
 *
 * Option #1: We use a function so the config data can be called and reused
 *            easily when you neeed it.
 *
 * Option #2: Put your array data inside a Service closure (see wireframe.php).
 *            Another alternative is putting all your object configs into one
 *            single config file to minimize your file count.
 *
 * @since  0.1.0 Wireframe
 * @since  0.1.0 Wireframe_Theme
 * @since  0.1.0 Wireframe_Child
 * @see    object Core_Language
 * @return array  Default configuration values.
 */
function wireframe_theme_cfg_language() {
	/**
	 * Module.
	 *
	 * Is this module for a theme or a plugin?
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Theme
	 * @since 0.1.0 Wireframe_Child
	 * @var   string $module The module type. Default: plugin
	 */
	$module = 'theme';

	/**
	 * Wired.
	 *
	 * Wires the Core_Language actions & filters at runtime. Since all themes
	 * should have use translation, this should always be set to true.
	 *
	 * Note: Most objects can be wired to hook actions & filters when an object
	 * is instantiated. This is optional, because some objects do not need any
	 * actions or filters.
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Theme
	 * @since 0.1.0 Wireframe_Child
	 * @var   bool $wired Wire hooks via __construct(). Default: true
	 */
	$wired = true;

	/**
	 * Prefix.
	 *
	 * Many objects use a prefix for various strings, handles, scripts, etc.
	 * Generally, you should use a constant defined in wireframe.php. However,
	 * you can change it here if needed. Default: WIREFRAME_THEME_TEXTDOMAIN
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Theme
	 * @since 0.1.0 Wireframe_Child
	 * @var   string $prefix Prefix for handles.
	 */
	$prefix = WIREFRAME_THEME_TEXTDOMAIN;

	/**
	 * Actions.
	 *
	 * Most objects will usually need actions to be hooked at some point.
	 * You can set your actions in a multi-dimensional array and remember
	 * to set the property $wired = true (above).
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Theme
	 * @since 0.1.0 Wireframe_Child
	 * @var   array $actions Actions to hook.
	 */
	$actions = array(
		'after_setup_theme' => array(
			'tag'      => 'after_setup_theme',
			'function' => 'textdomain',
			'priority' => 10,
			'args'     => null,
		),
	);

	/**
	 * Filters.
	 *
	 * Objects don't generally need filters here, but you have the option.
	 * You can set your filters in a multi-dimensional array and remember
	 * to set the property $wired = true (above).
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Theme
	 * @since 0.1.0 Wireframe_Child
	 * @var   array $filters Filters to hook.
	 * @todo  WIP.
	 */
	$filters = array();

	/**
	 * Language: Use the $plugin_rel_path parameter instead?
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Theme
	 * @since 0.1.0 Wireframe_Child
	 * @var   bool $deprecated Language path. Default: false
	 * @see   https://developer.wordpress.org/reference/functions/load_plugin_textdomain/
	 */
	$deprecated = false;

	/**
	 * Language: Path.
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Theme
	 * @since 0.1.0 Wireframe_Child
	 * @var   string $path Language path. Default: WIREFRAME_THEME_LANG
	 */
	$path = WIREFRAME_THEME_LANG;

	/**
	 * Option #1: Return (array) of config data for passing into objects.
	 *
	 * Option #2: Cast array as an (object) and use object/property sytnax
	 *            vs array syntax. If you choose to cast this array as an (object),
	 *            then you will need to modify the syntax in your class files.
	 *
	 * PRO-TIP: Most of Wireframe's object properties are protected or private
	 * and should not be set outside of this config file. However, you may wish
	 * to use `apply_filters` or `wp_json_encode` or `add_setting` or `add_option`
	 * whenever appropriate. Consider Admin pages for modifying settings & options.
	 *
	 * @since  0.1.0 Wireframe
	 * @since  0.1.0 Wireframe_Theme
	 * @since  0.1.0 Wireframe_Child
	 * @return array|object
	 */
	return array(
		'module'     => $module,
		'wired'      => $wired,
		'prefix'     => $prefix,
		'actions'    => $actions,
		'filters'    => $filters,
		'deprecated' => $deprecated,
		'path'       => $path,
	);

} // Thanks for using MixaTheme products!
<?php
/**
 * Footer template file for themes built with Wireframe Suite for WordPress.
 *
 * The template partial for displaying the footer. Contains the closing
 * of the `#content` div and all content after.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Child
 * @author    MixaTheme, Tada Burke
 * @version   0.1.0 Wireframe_Child
 * @copyright 2016 MixaTheme
 * @license   GPL-3.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/Wireframe
 * @see       https://github.com/mixatheme/wireframe-theme
 * @see       https://github.com/mixatheme/wireframe-child
 * @see       https://codex.wordpress.org/Template_Hierarchy
 * @see       https://developer.wordpress.org/themes/basics/template-files
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer col-sm-12" role="contentinfo">

			<div class="site-info">

				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wireframe-theme' ) ); ?>">
					<?php printf( esc_html__( 'Proudly powered by %s', 'wireframe-theme' ), 'WordPress' ); ?>
				</a>

				<span class="sep"> | </span>

				<?php printf( esc_html__( '%1$s by %2$s.', 'wireframe-theme' ), '<em>A custom Wireframe child theme</em>', '<a href="//mixatheme.com" rel="designer">Developer</a>' ); ?>

			</div><!-- .site-info -->

		</footer><!-- #colophon -->

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>

</html>

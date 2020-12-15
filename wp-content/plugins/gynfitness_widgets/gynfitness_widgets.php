<?php 

/*
Plugin Name: gynFitnness_widgets
Plugin URI: 
Description: Plugin de prueba 
Version:1.0.0
Author:CodeBAou
Author URI:
License: https://www.gnu.org/licenses/gpl-3.0.html
*/

//Que no se pueda ver el codigo desde el navegador

if(!defined('ABSPATH')) die();

/**
 * Adds Foo_Widget widget.
 */

class Foo_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Gynfitness Clases Widget', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'A Foo Widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */

    public function widget( $args, $instance ) { //En esta funcion se introduce codigo html que imprime el widget
        
        echo $args['before_widget'];
        
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
        

		$cantidad=$instance['cantidad'];

		?>

        <!-- Codigo HTML del widget -->
        <ul>
            <?php 
                //consulta de post-types en la base de datos
                $args=array(
                    'post_type' => 'gymfitness_clases', //nombre del post_types que indicamos en el registro del plugin de post-types 
                    'posts_per_page' => $cantidad //Mostrar 3 elementos
                );

                $clases=new WP_Query($args);
                while($clases -> have_posts()) : $clases -> the_post();
            ?>
                <li>
                    
                    <div class="imagen">

                        <?php the_post_thumbnail( 'thumbnail' )?>

                    </div>

                    <div class="contenido-clase">
                        
                        <a href="<?php the_permalink()?>"> 
                            <h3><?php the_title()?></h3>
                        </a>

                        <p> <?php the_field('dia');?> - <?php the_field('hora_inicio');?> - <?php the_field('hora_fin');?></p>

                    </div>

                </li>

            <?php endwhile; wp_reset_postdata() //Resetear query consulta?> 

        </ul>



    <?php
		echo $args['after_widget'];
	}



	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$cantidad= ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( 'Cuantas clases deseas mostrar?', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"><?php esc_attr_e( 'Cantidad:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cantidad' ) ); ?>" type="number" value="<?php echo esc_attr( $cantidad ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';

		return $instance;
	}

} // class Foo_Widget


// register Foo_Widget widget
function register_foo_widget() {
    register_widget( 'Foo_Widget' );
}
add_action( 'widgets_init', 'register_foo_widget' );


?>
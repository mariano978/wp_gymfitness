<?php

if (!defined('ABSPATH')) die();

class GymFitness_Clases_Widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'gymfitness_widget',
            esc_html__('GymFitness Clases', 'gymfitness'),
            array('description' => esc_html__('Agrega las Clases como Widget', 'gymfitness'),)
        );
    }

    public function widget($args, $instance)
    {
?>
        <ul class="clases-sidebar">
            <?php
            global $post;
            $current_post_id = $post->ID;
            $args = [
                "post_type" => "gymfitness_clases",
                "orderby" => "rand",
                "posts_per_page" => $instance["cantidad"],
                "post__not_in" => [$current_post_id]
            ];
            $clases = new WP_Query($args);
            while ($clases->have_posts()) {
                $clases->the_post();
            ?>
                <a href="<?php the_permalink(); ?>">
                    <li class="card-sidebar">
                        <?php the_post_thumbnail("thumbnail"); ?>
                        <div class="contenido-sidebar">
                            <h3> <?php echo the_title(); ?></h3>
                            <p><?php the_field("dias_clase"); //funcion de ACF 
                                ?> - <?php the_field("hora_inicio"); ?> a <?php the_field("hora_fin"); ?></p>
                        </div>
                    </li>
                </a>
            <?php
            }
            wp_reset_postdata();
            ?>
        </ul>
    <?php
    }

    public function form($instance)
    {
        $cantidad = !empty($instance["cantidad"]) ? $instance["cantidad"] : "";
    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id("cantidad")); ?>">
                <?php esc_attr_e("¿Cuántas clases desea mostrar?") ?>
            </label>
            <input type="widefat" name="<?php echo esc_attr($this->get_field_name("cantidad")); ?>" id="<?php echo esc_attr($this->get_field_id("cantidad")); ?>" type="number" value="<?php echo esc_attr($cantidad); ?>">
        </p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance["cantidad"] = (!empty($new_instance)) ? sanitize_text_field($new_instance["cantidad"]) : "";
        return $instance;
    }
}

function gymfitness_registrar_widget()
{
    register_widget('GymFitness_Clases_Widget');
}
add_action('widgets_init', 'gymfitness_registrar_widget');

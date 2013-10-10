<div class="ant-sig">
    <?php $adjacent_post = get_adjacent_post(false, '', true) ; ?>
    <?php $post_id = $adjacent_post->ID; ?>
    <div class="ant-sig-anterior">
        <div class="ant-sig-titulo">
            <a href="<?php echo get_permalink($post_id); ?>">ANTERIOR</a>
        </div>
        <div class="ant-sig-img">
            <a href="<?php echo get_permalink($post_id); ?>" class="img-link">
                <?php echo get_the_post_thumbnail( $post_id, 'next'); ?>
            </a>
        </div>
        <div class="ant-sig-descripcion">
            <a href="<?php echo get_permalink($post_id); ?>">
                <?php echo get_the_title($post_id); ?>
            </a>
        </div>
        <div class="ant-sig-descripcion-fondo"></div>
    </div>
    <?php $adjacent_post = get_adjacent_post(false, '', false) ; ?>
    <?php $post_id = $adjacent_post->ID; ?>
    <div class="ant-sig-siguiente">
        <div class="ant-sig-titulo">
            <a href="<?php echo get_permalink($post_id); ?>">SIGUIENTE</a>
        </div>
        <div class="ant-sig-img">
            <a href="<?php echo get_permalink($post_id); ?>" class="img-link">
                <?php echo get_the_post_thumbnail($post_id); ?>
            </a>
        </div>
        <div class="ant-sig-descripcion">
            <a href="<?php echo get_permalink($post_id); ?>">
                <?php echo get_the_title($post_id); ?>
            </a>
        </div>
        <div class="ant-sig-descripcion-fondo"></div>
    </div>
</div>
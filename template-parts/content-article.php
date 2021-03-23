<div class="container">
  <header class="content-header">
    <div class="meta mb-3">
      <span class="date"><?php the_date(); ?></span>
      <?php
        // 1 parametro: inicio de cada tag - 2 parametro: entre los tags - 3 parametro: al final de cada tag.
        the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
      ?>

      <?php
      $categories = get_the_category();
      $separator = ' ';
      $output = '';
      if ( ! empty( $categories ) ) {
        foreach( $categories as $category ) {
          $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
        }
        echo ("Categoría: ");
        echo trim($output, $separator );
      }
      ?>
      <span></span>
      <p>Autor: <?php the_author(); ?></p>

    </div>
  </header>

  <?php
    the_content();
  ?>

</div>

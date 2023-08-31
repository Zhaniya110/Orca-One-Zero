<?php get_header(); ?>
    <main class="main-content md:pr-16 px-4">
        <div class="container mx-auto flex items-start justify-center gap-[22px] flex-wrap md:flex-nowrap">
           
        <div class="flex flex-col gap-8"> 
            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>
                    
                    <div class="post flex flex-col  gap-[26px]">
                <div class="post-row-1 flex justify-between">
                    <h1 class="post-title mb-[10px]"><a href="<?php echo get_the_permalink( );?>"><?php the_title();?></a></h1>
                    <div class="share-button tooltip">
                        <div>
                       <img src="<?php echo get_template_directory_uri(  )?>/share.svg" alt="">
                       <span class="tooltiptext">
                        <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style flex flex-col gap-2">
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_telegram"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
                       </span>
                    </div>
                    </div>
                </div>
                <div class="post-content gap-[4px] flex flex-col justify-start">
                   <a  class="post-author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author( )?></a> 
                   <p class="post-meta"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></p>
                   <div class="orca-tags gap-[2px] justify-start">
                   <?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo  ' <div class="orca-tag inline-flex"><a href="' . esc_attr( get_tag_link( $tag->term_id ) ) . '">'. $tag->name . '</a> </div>'; 
  }
}
?>
                 
                   </div>
                </div>
                <p class="post-excerpt"><?php the_excerpt(  )?></p>
            </div>



              
                
                <?php endwhile; ?>
              <div class="flex justify-between w-full" >
				  <div class="post-title nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
<div class="post-title nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
			</div>
            <?php else: ?>
                <p><?php _e( 'No Blog Posts found', 'techlab-digital-solutions-agency' ); ?></p>
            <?php endif; ?>

            </div>


       
            <div class="sidebar-block md:w-[25%] flex flex-col gap-[13px]">
                <div class="sidebar-block-image-and-text flex flex-col gap-[10px] items-center mx-auto">
                <img class="sidebar-avatar" src="<?php echo esc_url( get_theme_mod( 'sidebar_image' ) ); ?>" alt="">
                    <h1 class="post-title"><?php echo get_theme_mod( 'sidebar_title' ) ; ?></h1>
                </div>
                <hr>
                <div class="sidebar-block-row-2">
                <p class="sidebar-block-title"><?php echo  get_theme_mod( 'sidebar_subtitle' ) ; ?></p>
                <p class="sidebar-block-text">
                <?php echo get_theme_mod( 'sidebar_text' ) ; ?>
                </p>
                </div>
            </div>
        </div>
    </main>
  <div class="test bg-red w-30 h-30"></div>
    
    <?php get_footer(); ?>
<?php get_header(); ?>
    <main class="main-content md:pr-16 px-4">
        <div class="container mx-auto flex items-start justify-center gap-[22px] flex-wrap md:flex-nowrap">
           
        <div class="flex flex-col gap-8"> 

                    <div class="post flex flex-col  gap-[26px]">
                <div class="post-row-1 flex justify-between">
                <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
                    <h1 class="post-title mb-[10px]"><?php echo $curauth->nickname; ?></h1>
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
                  
                
                </div>
                <p class="post-excerpt"><?php echo $curauth->user_description; ?></p>
            </div>

            </div>


       
        </div>
    </main>
  
    
    <?php get_footer(); ?>
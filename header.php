<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
   
</head>
<body>
<?php wp_head(); ?>
    <header>
  
        <div class="dark-header px-4  text-red bg-[#303B44] md:text-white">
            <div class="container mx-auto flex justify-between flex-wrap md:flex-nowrap items-center">
                <h1><?php bloginfo( 'name' ) ?></h1>
                <button data-collapse-toggle="dropdownNavbar" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden"
                aria-controls="dropdownNavbar" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="hamburger" xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12" fill="none">
                    <path d="M1 11H19M1 6H19M1 1H19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
            </button>
            <div class="h-screen md:h-auto  hidden w-full menu-mobile md:w-auto" id="dropdownNavbar">
            <?php 
                wp_nav_menu( array(
                    'menu' => 'ul',
                    'menu_class' =>'flex flex-col menu gap-[16px]',
                    'theme_location' =>'primary'
                ) )?>
                
               
            </div>
            
            </div>
           
        </div>
        <div class="white-header px-4">
            <div class="container mx-auto">
                <?php 
                wp_nav_menu( array(
                    'menu' => 'ul',
                    'menu_class' =>'flex menu gap-[42px] menu-items',
                    'theme_location' =>'primary'
                ) )?>
            <!-- <ul class="flex menu gap-[42px]">
                <li class="menu-items"><a href="#">menu i tem</a></li>
                <li class="menu-items"><a href="#">menu item</a></li>
                <li class="menu-items"><a href="#">menu item</a></li>
                <li class="menu-items"><a href="#">menu item</a></li>
            </ul> -->
        </div>
        </div>
    </header>
<header id="header-menu" role="navigation" 
    class="
        fixed top-0 w-full 
        px-10 py-8
        z-[10]
    "
>
    <nav class="bg-sky-900 ">
        <div class="
                flex justify-between align-center
            "
        >
            <a href="#" 
               class="  flex 
                        items-center 
                        lg:pl-52
                        pl-12"
                        
            >
                 <?php
                    // $custom_logo_id = get_theme_mod( 'custom_logo' );
                    // $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    // if ( has_custom_logo() ) {
                    //     echo '<img class="w-full" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    // } else {
                       
                        // echo '<img class="w-40" src="'.bloginfo('template_directory').'images/Asset 12.png" alt="logo">';
                       
                    // }
                ?> 
                 <img class="w-40" src="<?php bloginfo('template_directory');?>/images/Asset 12.png" alt="logo">
            </a>

            <button type="button" class="hidden navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarCollapse"
                class="
                    hidden
                    w-full
                    md:block
                    md:w-auto
                " 
            >
                <?php

                    wp_nav_menu(
                        array(
                            'menu' => 'header-menu ',
                            'container' => 'div',
                            'container_class' => 'navbar-nav',
                            'menu_class' => '   flex 
                                                flex-col 
                                                p-4 
                                                mt-4 
                                                border 
                                                border-gray-100 
                                                rounded-lg 
                                                bg-sky-900 
                                                md:flex-row 
                                                md:space-x-8 
                                                md:mt-0 
                                                md:text-sm 
                                                md:font-medium 
                                                md:border-0 
                                                dark:border-gray-700 ', // shoulde be for <ul></ul> class
                            'add_li_class' => ' block 
                                                py-2 
                                                pl-3 
                                                pr-4 
                                                text-white 
                                                rounded 
                                                hover:text-yellow-400 
                                                md:hover:bg-transparent 
                                                md:border-0 
                                                md:hover:text-yellow-400 
                                                md:p-0 dark:text-gray-400 
                                                md:dark:hover:text-yellow-400 
                                                dark:hover:bg-gray-700 
                                                dark:hover:text-yellow-400 
                                                md:dark:hover:bg-transparent
                                            ', // shoulde be for <ul> -> <li></li> class
                            'add_link_class' => 'nav-link', // shoulde be for <ul> -> <li> -> <a></a> class
                        )
                    );

                ?>
            </div>
        </div>
    </nav>
</header>
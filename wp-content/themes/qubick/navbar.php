<header id="header-menu" role="navigation" 
    class="
        fixed top-0 w-full 
        md:px-10 py-0
        z-[10]
    "
>
    <nav class="shadow md:flex md:items-center md:justify-between" style="background-color:#004179;">
        <div class="
                flex justify-between align-center
            "
        >
            <a href="../../bp-bcm/" 
               class="  flex 
                        items-center 
                        md:pl-52
                        my-2
                        md:mt-4                        
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

            <span class="text-3xl cursor-pointer mx-2 md:hidden block mt-3 ">
                <ion-icon name="menu" class="bg-sky-800" onclick="Menu(this)" style="color: white;"></ion-icon>
            </span>

        </div>

            <div id="navbarCollapse"
                class="" 
            >
                <?php

                    wp_nav_menu(
                        array(
                            'menu' => 'header-menu ',
                            'container' => 'div',
                            'container_class' => 'navbar-nav',
                            'menu_class' => '   md:mt-4
                                                md:pr-52
                                                md:flex 
                                                md:items-center 
                                                z-[-1] 
                                                md:z-auto 
                                                md:static 
                                                absolute
                                                w-full 
                                                left-0 
                                                md:w-auto 
                                                md:py-0 
                                                py-4 
                                                md:pl-0 
                                                pl-7 
                                                md:opacity-100 
                                                opacity-0 
                                                top-[-400px] 
                                                transition-all 
                                                ease-in 
                                                duration-500', // shoulde be for <ul></ul> class
                            'add_li_class' => ' mx-6
                                                my-5
                                                md:my-0
                                                text-white 
                                                hover:text-yellow-400  
                                                duration-500                                          
                                            ', // shoulde be for <ul> -> <li></li> class
                            'add_link_class' => '
                                                 ', // shoulde be for <ul> -> <li> -> <a></a> class
                        )
                    );

                ?>
            </div>
        
    </nav>

    <script>
    function Menu(e){
      let list = document.querySelector('ul');
   
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[50px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[50px]'),list.classList.remove('opacity-100'))
    }
  </script>
  
</header>

<!-- flex 
                                                flex-col 
                                                p-2 
                                                mt-4 
                                                border 
                                                border-gray-100 
                                                rounded-lg 
                                                bg-sky-900 
                                                md:flex-row 
                                                md:space-x-8 
                                                
                                                md:text-sm 
                                                md:font-normal 
                                                md:border-0 
                                                dark:border-gray-700

                                                block 
                                                py-0 
                                                pl-3 
                                                pr-4 
                                                text-white 
                                                rounded 
                                                hover:text-yellow-400 
                                                md:hover:bg-transparent 
                                                md:border-0 
                                                md:hover:text-yellow-400 
                                                dark:text-gray-400 
                                                md:dark:hover:text-yellow-400 
                                                dark:hover:bg-gray-700 
                                                dark:hover:text-yellow-400 
                                                md:dark:hover:bg-transparent -->
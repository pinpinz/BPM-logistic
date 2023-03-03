<header id="header-menu" role="navigation" 
    class="
        fixed top-0 w-full 
        px-10 py-8
        z-[10]
    "
>
    <nav class="text-white">
        <div class="
                flex justify-between align-center
            "
        >
            <a href="/"
                class="
                    w-[7%] h-fit
                    flex
                " 
            >
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img class="w-full" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<text>' . get_bloginfo('name') . '</text>';
                    }
                ?>
            </a>

            <button type="button" class="hidden navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarCollapse"
                class="
                    w-fit
                    text-right
                " 
            >
                <?php

                    wp_nav_menu(
                        array(
                            'menu' => 'header-menu ',
                            'container' => 'div',
                            'container_class' => 'navbar-nav',
                            'menu_class' => 'leading-[1.7] ', // shoulde be for <ul></ul> class
                            'add_li_class' => ' transition-all ease-linear 
                                                hover:opacity-50 
                                                duration-300
                                            ', // shoulde be for <ul> -> <li></li> class
                            'add_link_class' => 'nav-link', // shoulde be for <ul> -> <li> -> <a></a> class
                        )
                    );

                ?>
            </div>
        </div>
    </nav>
</header>
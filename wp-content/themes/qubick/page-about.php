<?php 
    include 'header.php';

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>

<div
    class="
        h-[100vh] w-[100vw]
        fixed top-0 right-0 bottom-0 left-0
        bg-[#fb5c30] 
        flex justify-center items-center
        opacity-0 z-[-1]
    "
    boom
>
    <b class="text-5xl text-[#231f20]">Boom!</b>

    <span 
        class="text-xl text-white absolute right-20 bottom-20 cursor-pointer" 
        goBack
        onclick="closeBoom()"
    >
        GO BACK

        <div 
            class="
                w-4 h-fit  ml-4
                overflow-hidden inline-block 
                transform translate-y-[50%]
                transition duration-500
            "
            goBackTriangle
        >
            <div class=" h-8 bg-white -rotate-45 transform origin-top-left"></div>
        </div>
    </span>
</div>

<div
    class="
        w-full
        bg-[url('<?=get_template_directory_uri()?>/images/bg-about.jpg')]
        bg-cover bg-center bg-no-repeat bg-fixed
    "
>

    <div class="
            h-[100vh] px-56
            flex justify-between items-center
        "
    >
        <h1 class="gs_reveal text-5xl text-white leading-normal">
            We are your<br>
            <i>creative partner</i>
        </h1>

        <div 
            class="
                gs_reveal
                bg-[#fb5c30] px-1 py-2
                text-xs cursor-pointer
            "
            onclick="openBoom()"
        >
            TAP
        </div>
    </div>

    <div class="
            h-[50vh] px-56 mb-[30vh]
            flex justify-end items-center
        "
    >
        <div class="text-3xl text-white leading-normal w-1/2 inline gs_reveal">
            <img class="w-[19%] inline transform -translate-y-0.5" src="<?=esc_url( $logo[0] )?>" alt="atdawn"> 
            <h2 class="inline">
                is a creative partner to help you <br>
                expand your business or just anything <br>
                through digital strategies and medias. <br>
                We provide creative ideas based on each <br>
                problem to reach the perfect soltion
            </h2>
        </div>
    </div>

    <div class="
            min-h-[100vh] px-32 py-48
            flex justify-between
            gs_reveal
        "
    >
        <div class="text-white leading-normal w-1/2">
            <h2 class="text-5xl mb-8">
                Our services
            </h2>

            <div
                class="
                    mb-16
                "
            >
                <button 
                    class="
                        outline outline-0
                        hover:bg-[#fb5c30] hover:border-[#fb5c30]
                        border-solid border-[1px] border-white 
                        transition-all ease-in-out duration-500
                        px-6 py-1 mr-2 rounded-3xl
                        text-white 
                        bg-[#fb5c30] border-[#fb5c30]
                    "
                    onclick="ourService('branding')"
                    id="ourService-button-branding"
                    OurServiceButton
                >
                    Branding
                </button>

                <button 
                    class="
                        outline outline-0
                        hover:bg-[#fb5c30] hover:border-[#fb5c30]
                        border-solid border-[1px] border-white 
                        transition-all ease-in-out duration-500
                        px-6 py-1 mx-2 rounded-3xl
                        text-white 
                    "
                    onclick="ourService('website')"
                    id="ourService-button-website"
                    OurServiceButton
                >
                    Website
                </button>

                <button 
                    class="
                        outline outline-0
                        hover:bg-[#fb5c30] hover:border-[#fb5c30]
                        border-solid border-[1px] border-white 
                        transition-all ease-in-out duration-500
                        px-6 py-1 mx-2 rounded-3xl
                        text-white 
                    "
                    onclick="ourService('scoial_media')"
                    id="ourService-button-scoial_media"
                    OurServiceButton
                >
                    Social Media
                </button>

                <button 
                    class="
                        outline outline-0
                        hover:bg-[#fb5c30] hover:border-[#fb5c30]
                        border-solid border-[1px] border-white 
                        transition-all ease-in-out duration-500
                        px-6 py-1 mx-2 rounded-3xl
                        text-white 
                    "
                    onclick="ourService('others')"
                    id="ourService-button-others"
                    OurServiceButton
                >
                    Others
                </button>
            </div>
            
            <div
                class="
                    w-[80%] relative  
                "
            >
                <p 
                    id="ourService-text-branding" 
                    OurServiceText
                    class="
                        opacity-100 absolute
                        transition-all ease-in-out duration-500
                    "
                >
                    Branding is the soul and identity of a brand which is communicated to
                    people through its name, logo, tone of communications, and unique
                    visual appearance.
                </p>

                <p 
                    id="ourService-text-website" 
                    OurServiceText
                    class="
                        opacity-0 absolute
                        transition-all ease-in-out duration-500
                    "
                >
                    Websites are one of the most popular business tool or media, not only
                    for sales but also for marketing. We help business creating impactful
                    user interface and experience (UI/UX) that attracts and engages with
                    the users.
                </p>

                <p 
                    id="ourService-text-scoial_media" 
                    OurServiceText
                    class="
                        opacity-0 absolute
                        transition-all ease-in-out duration-500
                    "
                >
                    Sosmed
                </p>

                <p 
                    id="ourService-text-others" 
                    OurServiceText
                    class="
                        opacity-0 absolute
                        transition-all ease-in-out duration-500
                    "
                >
                    Others
                </p>
            </div>
        </div>

        <div class="text-white leading-normal w-1/2 relative">
            <div 
                class="
                    w-full h-[50vh]
                    bg-[url('<?=get_template_directory_uri()?>/images/about-branding.png')]
                    bg-cover bg-center bg-no-repeat
                    opacity-100 absolute
                    transition-all ease-in-out duration-500
                "
                id="ourService-image-branding"
                OurServiceImage
            ></div>

            <div 
                class="
                    w-full h-[50vh]
                    bg-[url('<?=get_template_directory_uri()?>/images/about-website.png')]
                    bg-cover bg-center bg-no-repeat
                    opacity-0 absolute
                    transition-all ease-in-out duration-500
                "
                id="ourService-image-website"
                OurServiceImage
            ></div>

            <div 
                class="
                    w-full h-[50vh]
                    bg-[url('<?=get_template_directory_uri()?>/images/about-branding.png')]
                    bg-cover bg-center bg-no-repeat
                    opacity-0 absolute
                    transition-all ease-in-out duration-500
                "
                id="ourService-image-scoial_media"
                OurServiceImage
            ></div>

            <div 
                class="
                    w-full h-[50vh]
                    bg-[url('<?=get_template_directory_uri()?>/images/about-website.png')]
                    bg-cover bg-center bg-no-repeat
                    opacity-0 absolute
                    transition-all ease-in-out duration-500
                "
                id="ourService-image-others"
                OurServiceImage
            ></div>
        </div>
    </div>

    <div
        class="
            text-white
            w-full min-h-[50vh]
            px-36
            flex justify-between gs_reveal
        "
    >
        <div
            class="
                text-5xl
            "
        >
            Reach us
        </div>

        <div>
            <div
                class="
                    cursor-pointer gs_reveal
                    hover:border-[#fb5c30] hover:text-[#fb5c30]
                    border-solid border-white border-b-4 
                    pb-2 mb-10
                    transition-all duration-300
                "
            >
                <a
                    class="
                        text-5xl
                    "
                    href="mailto:info@ideas-atdawn.com"
                >
                    info@ideas-atdawn.com
                </a>
            </div>

            <div
                class="
                    text-right
                "
            >
                <a 
                    class="mx-6 hover:text-[#fb5c30] cursor-pointer" 
                    href="https://www.instagram.com/ideasatdawn/"
                >
                    Instagram
                </a>
                <a 
                    class="mx-6 hover:text-[#fb5c30] cursor-pointer" 
                    href="https://www.behance.net/atdawnideas/"
                >
                    Behance
                </a>
                <a 
                    class="mx-6 hover:text-[#fb5c30] cursor-pointer" 
                    href="https://www.linkedin.com/company/atdawn-creative-agency/"
                >
                    LinkedIn
                </a>
                <a 
                    class="ml-6 hover:text-[#fb5c30] cursor-pointer" 
                    href="https://dribbble.com/atdawn/"
                >
                    Dribble
                </a>
            </div>
        </div>
    </div>

</div>

<script>

    var currentOurService = 'branding'

    function ourService(theID){
        console.log("asdad",theID)
        var theButton = '#ourService-button-'+theID+'[OurServiceButton]';
        var theText = '#ourService-text-'+theID+'[OurServiceText]';
        var theImage = '#ourService-image-'+theID+'[OurServiceImage]';

        // BUTTON
        $('[OurServiceButton]').removeClass("bg-[#fb5c30] border-white border-[#fb5c30]")
        $('[OurServiceButton]').addClass("border-white")
        $(theButton).addClass("bg-[#fb5c30] border-[#fb5c30]")

        // TEXT
        $('#ourService-text-'+currentOurService+'[OurServiceText]').removeClass("opacity-100")
        $('[OurServiceText]').addClass("opacity-0")
        $(theText).addClass("opacity-100")
        $(theText).removeClass("opacity-0")

        // IMAGE
        $('#ourService-image-'+currentOurService+'[OurServiceImage]').removeClass("opacity-100")
        $('[OurServiceImage]').addClass("opacity-0")
        $(theImage).addClass("opacity-100")
        $(theImage).removeClass("opacity-0")

        currentOurService = theID;
    }

    function openBoom(){
        $('[boom]').addClass("opacity-100 z-[20]")
        $('[boom]').removeClass("opacity-0 z-[-1]")
    }

    function closeBoom(){
        $('[boom]').removeClass("opacity-100 z-[20]")
        $('[boom]').addClass("opacity-0 z-[-1]")
    }

    $("[goBack]").mouseover(function() {
        console.log("asa")
        // $( "#log" ).append( "<div>Handler for .mouseover() called.</div>" );
    });

    $("[goBack]")
    .mouseenter(function() {
        $("[goBackTriangle]").addClass("rotate-45")
    })
    .mouseleave(function() {
        $("[goBackTriangle]").removeClass("rotate-45")
    });
    

    function animateFrom(elem, direction) {
        direction = direction || 1;
        var x = 0,
            y = direction * 200;
            
        elem.style.transform = "translate(" + x + "px, " + y + "px)";
        elem.style.opacity = "0";
        gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
            duration: 3, 
            x: 0,
            y: 0, 
            autoAlpha: 1, 
            ease: "expo", 
            overwrite: "auto"
        });
    }

    function hide(elem) {
        gsap.set(elem, {autoAlpha: 0});
    }

    document.addEventListener("DOMContentLoaded", function() {
        gsap.registerPlugin(ScrollTrigger);
        
        gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
            hide(elem); // assure that the element is hidden when scrolled into view
            
            ScrollTrigger.create({
                trigger: elem,
                markers: false,
                onEnter: function() { animateFrom(elem) }, 
                onEnterBack: function() { animateFrom(elem, -1) },
                onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
            });
        }).delay(2);
    });

</script>

<?php 
    include 'footer.php';
?>
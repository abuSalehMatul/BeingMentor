<header id="main-header" data-height-onload="79">
    <div class="container clearfix et_menu_container">
        <div class="logo_container">
            <span class="logo_helper"></span>
            <a href="index.html">
                <img src="{{asset('images/logo-4.png')}}" alt="BeingMentor" id="logo" data-height-percentage="100" />
            </a>
        </div>
        <div id="et-top-navigation" data-height="79" data-fixed-height="40">
            <nav id="top-menu-nav">
                <ul id="top-menu" class="nav">
                    <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-49">
                        <a href="index.html" aria-current="page">Home</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-52"><a
                            href="http://mentors/">Mentors</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-50"><a
                            href="contact-us/index.html">Contact</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-51"><a
                            href="about/index.html">About</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141"><a href="#"><i
                                class="fab fa-instagram"></i></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a href="#"><i
                                class="fab fa-facebook"></i></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-143"><a href="#"><i
                                class="fab fa-linkedin"></i></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a href="#"><i
                                class="fab fa-twitter-square"></i></a></li>
                </ul>
            </nav>
            <div id="et_mobile_nav_menu">
                <div class="mobile_nav closed">
                    <span class="select_page">Select Page</span>
                    <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="et_search_outer">
        <div class="container et_search_form_container">
            <form role="search" method="get" class="et-search-form" action="https://www.beingmentor.pk/">
                <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s"
                    title="Search for:" /> </form>
            <span class="et_close_search_field"></span>
        </div>
    </div>
</header>

<script type="application/javascript">
window.onload = function(){
    let header = document.getElementById('main-header');
    let logo = document.getElementById('logo');
    let topNavigation = document.getElementById('et-top-navigation');
    header.style.position= "relative";
    header.style.backgroundColor = "#287CCC";
    window.addEventListener("scroll", function (event) {
        let scroll = this.scrollY;
        if(scroll < 110){
            logo.style.maxHeight = "100%";
            header.style.position = "relative";
            header.style.backgroundColor = "#287CCC";
            header.style.height =  "100%";
            header.style.opacity = 1;
            topNavigation.style.padding = "4px"
        }else{
            logo.style.maxHeight = "45%";
            header.style.position = "fixed";
            header.style.backgroundColor = "#58ce52";
            header.style.padding = "8px";
            header.style.height =  "80px";
            header.style.opacity = .9;
            topNavigation.style.padding = "0"
        }
    });
};

</script>

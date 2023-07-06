<!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down" src="{{ asset('backend/assets/images/logo/materialize-logo-color.png') }}" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('backend/assets/images/logo/materialize-logo.png') }}" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="active bold"><a class="waves-effect waves-cyan " href="{{ route('dashboard') }}"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>

        </li>
        


        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">home</i><span class="menu-title" data-i18n="Home Slide Setup">Home Slide Setup</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="Home Slide">Home Slide</span></a>
              </li>              
            </ul>
          </div>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">people</i><span class="menu-title" data-i18n="Home Slide Setup">About Page Setup</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a  href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="About us">About Us</span></a>
              </li>
              <li><a  href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="Highlights">Highlights</span></a>
              </li>  
              <li><a href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="Home Slide">Partners</span></a>
              </li>
              <li><a  href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="Testimonials">Testimonials</span></a>
              </li>  
              <!-- <li><a  href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="Home Slide">Team</span></a></li>   -->
              <!-- <li><a  href="user-profile-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Home Slide">Packages</span></a></li> -->    
            </ul>
          </div>
        </li>
        
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">work</i><span class="menu-title" data-i18n="User Profile">Services Set up</span></a>

          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a   href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="Highlights">Service Category</span></a>
              </li>  
              <li><a   href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="About us">Service List</span></a>
              </li>    
            </ul>
          </div>
        </li>
        
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">collections</i><span class="menu-title" data-i18n="User Profile">Portfolio Set up</span></a>

          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="Highlights">Portfolio</span></a>
              </li>     
            </ul>
          </div>
        </li>
        
      </ul>
       <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>

    </aside>
    <!-- END: SideNav-->
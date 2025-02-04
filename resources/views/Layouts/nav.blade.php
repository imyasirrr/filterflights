<header id="header" class="header-bg">
    <div class="header-top">
        <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                  <ul>
                      <li><a href="#">Visit Us</a></li>
                      <li><a href="#">Buy Tickets</a></li>
                  </ul>			
              </div>
              <div class="col-lg-6 col-sm-6 col-6 header-top-right">
                <div class="header-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
              </div>
          </div>			  					
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="{{ url('/home') }}"><img style="height: 70px" src="{{ asset('assets/img/FilterFlight/footerLogo.png') }}" alt="" title="" /></a>
            {{-- <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="" title="" /></a> --}}
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="{{ url('/home') }}">Home</a></li>
              <li><a href="{{ url('/about') }}">About</a></li>
              {{-- <li><a href="#">Packages</a></li>
              <li><a href="#">Hotels</a></li>
              <li><a href="#">Insurence</a></li> --}}
              <li><a href="{{ url('/blog') }}">Blog</a>
                {{-- <ul>
                  <li><a href="#">Blog Home</a></li>
                  <li><a href="#">Blog Single</a></li>
                </ul> --}}
              </li>	
              {{-- <li class="menu-has-children"><a href="">Pages</a>
                <ul>
                      <li><a href="elements.html">Elements</a></li>
                      <li class="menu-has-children"><a href="">Level 2 </a>
                        <ul>
                          <li><a href="#">Item One</a></li>
                          <li><a href="#">Item Two</a></li>
                        </ul>
                      </li>					                		
                </ul>
              </li>					          					          		           --}}
              <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->					      		  
        </div>
    </div>
</header><!-- #header -->
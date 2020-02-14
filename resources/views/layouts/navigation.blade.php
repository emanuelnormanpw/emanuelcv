<!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

              <div class="d-flex flex-row align-items-center">
                <!-- Logo container-->
                <div class="col logo">

                    <a href="index" class="logo">
                        <img src="{{url('/')}}/assets/images/import/profile.png" alt="" class="logo-small">
                        <img src="{{url('/')}}/assets/images/import/profile.png" alt="" class="logo-large">
                    </a>



                </div>
                <!-- End Logo container-->
                <div class="col d-flex justify-content-end">

                    <div class="main-menu heavy m-r-25">
                      <a class="nav text-orange" href="#">PROJECT</a>
                    </div>

                    <div class="main-menu heavy m-r-25 ">
                    <a class="nav text-orange" href="#">TOOLS & SKILLS</a>
                    </div>

                    <div class="main-menu heavy ">
                    <a class="nav text-orange" href="#">CONTACT</a>
                    </div>



              </div>

              <div class="submenu btn-group">
                <button type="button" class="" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                  <img src="{{url('/')}}/assets/images/import/submenu.png" alt="" class="submenu">
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                  <button class="heavy dropdown-item" type="button"><a class="nav text-orange" href="#">PROJECT</a></button>
                  <button class="heavy dropdown-item" type="button"><a class="nav text-orange" href="#">TOOLS & SKILLS</a></button>
                  <button class="heavy dropdown-item" type="button"><a class="nav text-orange" href="#">CONTACT</a></button>

                </div>
              </div>

              </div>



            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->
    </header>
    <!-- End Navigation Bar-->

@section('script')
<script src="{{ URL::asset('assets/js/bootstrap.js')}}"></script>
@endsection

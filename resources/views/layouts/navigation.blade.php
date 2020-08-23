<!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <section class="container-fluid">

              <div class="d-flex flex-row align-items-center p-t-10">
                <!-- Logo container-->
                <div class="col logo">

                    <a href=" {{route ('homepage') }}" class="logo">
                        <img src="{{url('/')}}/assets/images/import/profile.png" alt="" class="logo-small">
                        <img src="{{url('/')}}/assets/images/import/profile.png" alt="" class="logo-large">
                    </a>



                </div>
                <!-- End Logo container-->
                <div class="col d-flex justify-content-end">

                    <div class="main-menu heavy m-r-25">
                      <a class="nav text-orange" href="{{ route('project') }}"><h6>PROJECT</h6></a>
                    </div>

                    <div class="main-menu heavy ">
                    <a class="nav text-orange" href="#"><h6>CONTACT</h6> </a>
                    </div>



              </div>

              <div class="submenu btn-group">
                <button type="button" class="" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                  <img src="{{url('/')}}/assets/images/import/submenu.png" alt="" class="submenu">
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                  <button class="heavy dropdown-item" type="button"><a class="nav text-orange" href="{{ route('project') }}">PROJECT</a></button>
                  <button class="heavy dropdown-item" type="button"><a class="nav text-orange" href="#">CONTACT</a></button>
                </div>
              </div>

              </div>




        </div>
        <!-- end topbar-main -->
    </header>
    <!-- End Navigation Bar-->

@section('script')
<script src="{{ URL::asset('assets/js/bootstrap.js')}}"></script>
@endsection

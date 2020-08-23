@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="container-fluid">
    <div class="embed-responsive-item row">
        <div class="col-12 text-center">
            <h5 class="heavy text-orange">MY PROJECT</h5>
            <hr class="hr-title">
        </div>

        <nav class="d-flex justify-content-center navbar col-lg-12">
            <div class="">
                <ul class="row nav nav-pills">
                    <li class="p-10 nav-item">
                        <a class="regular list-group-item list-group-item-action active" data-toggle="list"
                            href="#dashboard-website" role="tab">Dashboard Website</a>
                    </li>

                    <li class="p-l-10 nav-item">
                        <a class="regular list-group-item list-group-item-action" data-toggle="list"
                            href="#bs-silver-group" role="tab">Borobudur Silver Group</a>
                    </li>

                    <li class="p-l-10 nav-item">
                        <a class="regular list-group-item list-group-item-action" data-toggle="list" href="#helipos"
                            role="tab">HeliPOS</a>
                    </li>
                </ul>
            </div>

        </nav>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- DASHBOARD -->
            <div class="tab-pane active" id="dashboard-website" role="tabpanel">

                <div class="row m-t-30 m-b-30">
                    <div class="col-lg-12 text-center m-b-30">
                        <h5 class="bold text-orange">Dashboard Website</h5>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-center row m-b-10">
                            <div class="col-lg-3">
                                <img class="shadow p-3 mb-5 bg-white" style="width: 100%;"
                                    src="assets/images/import/project-dashboard-1.png" alt="">
                            </div>

                            <div class="col-lg-3">
                                <img class="shadow p-3 mb-5 bg-white" style="width: 100%;"
                                    src="assets/images/import/project-dashboard-2.png" alt="">
                            </div>

                            <div class="col-lg-3">
                                <img class="shadow p-3 mb-5 bg-white" style="width: 100%;"
                                    src="assets/images/import/project-dashboard-3.png" alt="">
                            </div>

                            <div class="col-lg-3">
                                <img class="shadow p-3 mb-5 bg-white" style="width: 100%;"
                                    src="assets/images/import/project-dashboard-4.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 m-b-10 regular font-14">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="{{route('dashboard')}}"><button class="bold btn btn-orange" type="button"
                                name="button">More Detail</button></a>
                    </div>
                </div>

            </div>

            <!-- BS -->
            <div class="tab-pane" id="bs-silver-group" role="tabpanel">

                <div class="row m-t-30 m-b-30">
                    <div class="col-lg-12 text-center m-b-30">
                        <h5 class="bold text-orange">Borobudur Silver Group</h5>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-center row m-b-10">
                            <div class="col-lg-3">
                                <img class="shadow mb-5 bg-white" style="width: 100%;"
                                    src="assets/images/import/project-bs-1.png" alt="">
                            </div>

                            <div class="col-lg-3">
                                <img class="shadow mb-5 bg-white" style="width: 100%;"
                                    src="assets/images/import/project-bs-2.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 m-b-10 regular font-14">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="{{route('borobudur-silver')}}"><button class="bold btn btn-orange" type="button"
                                name="button">More Detail</button></a>
                    </div>
                </div>

            </div>

            <!-- Helipos -->
            <div class="tab-pane" id="helipos" role="tabpanel">

                <div class="row m-t-30 m-b-30">
                    <div class="col-lg-12 text-center m-b-30">
                        <h5 class="bold text-orange">HeliPOS</h5>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-around row m-b-10">

                            <div class="rounded col-lg-3 shadow mb-5 bg-white embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://drive.google.com/file/d/1wfDixNJGzYruGLrBipyGiCVN62c3LXgb/preview"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="rounded col-lg-3 shadow mb-5 bg-white embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://drive.google.com/file/d/1_pTJtLWY_nNZbYmZe2EFChgPGA-2Bs2J/preview"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="rounded col-lg-3 shadow mb-5 bg-white embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://drive.google.com/file/d/1_pTJtLWY_nNZbYmZe2EFChgPGA-2Bs2J/preview"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 m-b-10 regular font-14">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="{{route('helipos')}}"><button class="bold btn btn-orange" type="button"
                                name="button">More Detail</button></a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection

@section('script')

<script src="{{ URL::asset('assets/pages/project.js')}}"></script>


@endsection

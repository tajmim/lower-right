@extends('master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">


                @foreach ($users as $user)
                    <div class="col-md-12">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body profile-page p-0">
                                <div class="profile-header-image">
                                    <div class="cover-container">
                                        <img src="../assets/images/page-img/profile-bg2.jpg" alt="profile-bg"
                                            class="rounded img-fluid w-100">
                                    </div>
                                    <div class="profile-info p-4">
                                        <div class="user-detail">
                                            <div class="d-flex flex-wrap justify-content-between align-items-start">
                                                <div class="profile-detail d-flex">
                                                    <div class="profile-img pe-4">
                                                        <img src="../assets/images/user/05.jpg" alt="profile-img"
                                                            class="avatar-130 img-fluid">
                                                    </div>
                                                    <div class="user-data-block">
                                                        <h4>
                                                            <a href="friend-profile.html">{{ $user->name }}</a>
                                                        </h4>
                                                        <h6>@designer</h6>
                                                        <p>Lorem Ipsum is simply dummy text of the</p>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Friend</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($users->count() <= 0)
                    <h4 class='text-center' style='color:gray'>
                        <i>
                            No Users Found
                        </i>
                    </h4>
                @endif




            </div>
        </div>
    </div>
@endsection

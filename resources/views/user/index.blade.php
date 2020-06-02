@extends('user.master')

@section('content')
    <style>
        .emp-profile{
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
        .profile-img{
            text-align: center;
        }
        .profile-img img{
            width: 70%;
            height: 100%;
        }
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        .profile-head h5{
            color: #333;
        }
        .profile-head h6{
            color: #0062cc;
        }
        .profile-edit-btn{
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }
        .proile-rating{
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        .proile-rating span{
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        .profile-head .nav-tabs{
            margin-bottom:5%;
        }
        .profile-head .nav-tabs .nav-link{
            font-weight:600;
            border: none;
        }
        .profile-head .nav-tabs .nav-link.active{
            border: none;
            border-bottom:2px solid #0062cc;
        }
        .profile-work{
            padding: 14%;
            margin-top: -15%;
        }
        .profile-work p{
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        .profile-work a{
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        .profile-work ul{
            list-style: none;
        }
        .profile-tab label{
            font-weight: 600;
        }
        .profile-tab p{
            font-weight: 600;
            color: #0062cc;
        }
    </style>
    <div class="container emp-profile">
        <form method="post" action="{{ route('update_user') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{ Voyager::image( Auth::user()->avatar ) }}" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            Đổi avatar
                            <input type="file" name="avatar"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin cá nhân</a>
                            </li>
                        </ul>
                        <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Họ tên</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Điện thoại</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->phone }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Địa chỉ</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="address" value="{{ Auth::user()->address }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Ngày tạo</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ date('d-m-Y', strtotime(Auth::user()->created_at)) }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Cấp độ khách hàng thân thiết</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->loyal_customer()->first()->level }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>
        </form>
    </div>
@stop

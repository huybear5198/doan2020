<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chợ mới</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('browse/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('browse/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('browse/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('browse/css/bootstrap-datepicker.css') }}">

    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 7px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #a7a7a7;
        }
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #929292;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        li {
            list-style: none;
        }
        .user-wrapper, .message-wrapper {
            border: 1px solid #dddddd;
            overflow-y: auto;
        }
        .user-wrapper {
            height: 600px;
        }
        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }
        .user:hover {
            background: #eeeeee;
        }
        .user:last-child {
            margin-bottom: 0;
        }
        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }
        .media-left {
            margin: 0 10px;
        }
        .media-left img {
            width: 64px;
            border-radius: 64px;
        }
        .media-body p {
            margin: 6px 0;
        }
        .message-wrapper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;
        }
        .messages .message {
            margin-bottom: 15px;
        }
        .messages .message:last-child {
            margin-bottom: 0;
        }
        .received, .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }
        .received {
            background: #3bebff;
        }
        .sent {
            background: #fff;
            float: right;
            text-align: right;
        }
        .message p {
            margin: 5px 0;
        }
        .date {
            color: #777777;
            font-size: 12px;
        }
        .active {
            background: #eeeeee;
        }
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }
        input[type=text]:focus {
            border: 1px solid #aaaaaa;
        }
    </style>
</head>
<body>
<div class="site-wrap">
    <div class="container-fluid">
        <div class="site-mobile-menu-header">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ route('home') }}" class="btn col-md-4" role="button" style="border:0;border-radius:20%;background-color:#bfe6ff;"><i class="icomoon icon-home"></i></i></a>
                    <a href="{{ url('/user') }}" class="btn col-md-4" role="button" style="border:0;border-radius:20%;background-color:#bfe6ff;"><i class="icomoon icon-arrow-left"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1" style="padding-right: 1px;border:0;">
                    <button style="width:100%;border-radius:20%;">Tất cả</button>
                </div>
                <div class="col-md-1" style="padding: 0 1px 0 0;">
                    <button style="width:100%;border-radius:20%;">Mua</button>
                </div>
                <div class="col-md-1" style="padding: 0 15px 0 0;">
                    <button style="width:100%;border-radius:20%;">Bán</button>
                </div>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="user-wrapper">
                    <ul class="users">
                        @foreach($users as $user)
                        <li class="user" id="{{ $user->id }}">
                            @if($user->unread)
                                <span class="pending">{{ $user->unread }}</span>
                            @endif
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{ $user->avatar }}" alt="">
                                </div>
                                <div class="media-body">
                                    <p class="name">{{ $user->name }}</p>
                                    <p class="email">{{ $user->email }}</p>
                                </div>
                            </div>
                        </li> 
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-9" id="messages" style="height: 100%;">
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('browse/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('browse/js/jquery-ui.js') }}"></script>
<script src="{{ asset('browse/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('browse/js/bootstrap-datepicker.min.js') }}"></script>
<script src="https://js.pusher.com/6.0/pusher.min.js"></script>

<script>
    var receiver_id = '';
    var my_id = "{{ Auth::id() }}";
    var user_id = getParameterByName('user_id');
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        if(user_id != null)
        {
            $.ajax({
                url: "/final/doan2020/public/message_user/"+user_id,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if(!$(`.user#${response[0].i}`))
                    {
                        $('.users').children('li').before('<li class="user" id="'+response[0].id+'"><div class="media"><div class="media-left"><img src="'+response[0].avatar+'" alt=""></div><div class="media-body"><p class="name">'+response[0].name+'</p><p class="email">'+response[0].email+'</p></div></div></li>');
                    }
                    loadPusher();
                    clickUser();
                    typeMess();
                }, 
            });
        }
        clickUser();
        loadPusher();
        typeMess();
    });
// make a function to scroll down auto
    function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
    
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
    function clickUser(){
        $('.user').click(function() {
            $('.user').removeClass('active');
            $(this).addClass('active');
            $(this).find('.pending').remove();

            receiver_id = $(this).attr('id');
            $.ajax({
                type: "get",
                url: "message/" + receiver_id,
                cache: false,
                success: function (data) {
                    $('#messages').html(data);
                    scrollToBottomFunc();
                }
            });
        });
    }
    function loadPusher(){
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('d63270cb9941f4f3a67b', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            // alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());

                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });
    }
    function typeMess(){
        $(document).on('keyup', '.input-text input.submit', function (e) {
            var message = $(this).val();

            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty

                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message",
                    data: datastr,
                    cache: false,
                    success: function (data) {
                        scrollToBottomFunc();
                    },
                    error: function (jqXHR, status, err) {
                    }
                })
            }
        });
    }
</script>
</body>
</html>
<title>Call Center</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description"
    content="Empire Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords"
    content="Empire, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
<meta name="author" content="Srthemesvilla" />
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<!-- Icon fonts -->
<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/linearicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/open-iconic.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/pe-icon-7-stroke.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">

<!-- Core stylesheets -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-material.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/shreerang-material.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">

<!-- Libs -->
<link rel="stylesheet" href="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/libs/flot/flot.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
{{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
{{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}

{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"> --}}
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

@livewireStyles

{{-- <link rel="stylesheet" type="text/css" href="{{ asset('homes/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('homes/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('homes/css/responsive.css') }}">
      <!-- fevicon -->
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('homes/css/jquery.mCustomScrollbar.min.css') }}">
      <link rel="stylesheet" href="{{ asset('homes/css/owl.carousel.min.css') }}">
      <link rel="stylesoeet" href="{{ asset('homes/css/owl.theme.default.min.css') }}"> --}}



<style>
    .container {
        max-width: 1170px;
        margin: auto;
    }

    img {
        max-width: 80%;
    }

    .inbox_people {
        background: #f8f8f8 none repeat scroll 0 0;
        float: left;
        overflow: hidden;
        width: 30%;
        border-right: 1px solid #c4c4c4;
    }

    .inbox_msg {
        border: 1px solid #c4c4c4;
        clear: both;
        overflow: hidden;
    }

    .top_spac {
        margin: 20px 0 0;
    }


    .recent_heading {
        float: left;
        width: 40%;
    }

    .srch_bar {
        display: inline-block;
        text-align: right;
        width: 60%;
    }

    .headind_srch {
        padding: 10px 29px 10px 20px;
        overflow: hidden;
        border-bottom: 1px solid #c4c4c4;
    }

    .recent_heading h4 {
        color: #05728f;
        font-size: 21px;
        margin: auto;
    }

    .srch_bar input {
        border: 1px solid #cdcdcd;
        border-width: 0 0 1px 0;
        width: 80%;
        padding: 2px 0 4px 6px;
        background: none;
    }

    .srch_bar .input-group-addon button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        padding: 0;
        color: #707070;
        font-size: 18px;
    }

    .srch_bar .input-group-addon {
        margin: 0 0 0 -27px;
    }

    .chat_ib h5 {
        font-size: 15px;
        color: #464646;
        margin: 0 0 8px 0;
    }

    .chat_ib h5 span {
        font-size: 13px;
        float: right;
    }

    .chat_ib p {
        font-size: 14px;
        color: #989898;
        margin: auto
    }

    .chat_img {
        float: left;
        width: 11%;
    }

    .chat_ib {
        float: left;
        padding: 0 0 0 15px;
        width: 88%;
    }

    .chat_people {
        overflow: hidden;
        clear: both;
    }

    .chat_list {
        border-bottom: 1px solid #c4c4c4;
        margin: 0;
        padding: 18px 16px 10px;
    }

    .inbox_chat {
        height: 550px;
        overflow-y: scroll;
    }

    .active_chat {
        background: #ebebeb;
    }

    .incoming_msg_img {
        display: inline-block;
        width: 8%;
    }

    .received_msg {
        display: inline-block;
        padding: 0 0 0 10px;
        vertical-align: top;
        width: 90%;
    }

    .received_withd_msg p {
        background: #ebebeb none repeat scroll 0 0;
        border-radius: 3px;
        color: #000000;
        font-size: 20px;
        margin: 0;
        padding: 5px 10px 5px 12px;
        width: 90%;
    }

    .time_date {
        color: #747474;
        display: block;
        font-size: 14px;
        margin: 8px 0 0;
    }

    .received_withd_msg {
        width: 57%;
    }

    /* Aqui se modifica el ancho */
    .mesgs {
        float: left;
        padding: 30px 15px 0 25px;
        width: 100%;
    }

    .sent_msg p {
        background: #05728f none repeat scroll 0 0;
        border-radius: 3px;
        font-size: 20px;
        margin: 0;
        color: #fff;
        padding: 5px 10px 5px 12px;
        width: 100%;
    }

    .outgoing_msg {
        overflow: hidden;
        margin: 10px 0 10px;
    }

    .sent_msg {
        float: right;
        width: 60%;
    }

    .input_msg_write input {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        color: #4c4c4c;
        font-size: 14px;
        min-height: 50px;
        width: 1050px;
    }

    .type_msg {
        border-top: 1px solid #c4c4c4;
        position: relative;
    }

    .msg_send_btn {
        background: #05728f none repeat scroll 0 0;
        border: medium none;
        border-radius: 30%;
        color: #fff;
        cursor: pointer;
        font-size: 20px;
        height: 40px;
        position: relative;
        right: 0;
        top: 5px;
        width: 50px;
    }

    .messaging {
        padding: 0 0 50px 0;
    }

    .msg_history {
        height: 516px;
        overflow-y: auto;
    }
</style>

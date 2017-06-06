<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Quản lý hệ thống') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- Animation library for notifications   -->
    <link href="{{ asset('public/assets/css/animate.min.css') }}" rel="stylesheet"/>
    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('public/assets/css/paper-dashboard.css') }}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('public/assets/css/demo.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/assets/css/fullcalendar.css') }}" rel="stylesheet"/>
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('public/assets/css/themify-icons.css') }}" rel="stylesheet">
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('home')}}" class="simple-text">
                    {{ config('app.name', 'Quản lý hệ thống') }}
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="{{url('clinic')}}">
                        <i class="ti-home"></i>
                        <p>Quản trị</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('clinic')}}">
                        <i class="ti-home"></i>
                        <p>Quản lý phòng khám</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('events')}}">
                        <i class="ti-calendar"></i>
                        <p>Quản lý lịch khám</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>Quản lý bệnh nhận</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-reload"></i>
                        <p>Báo cáo</p>
                    </a>
                </li>

                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="{{url('config')}}">
                        <i class="ti-settings"></i>
                        <p>Cấu hình</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <p class="notification">5</p>
                                <p>Notifications</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="content">
            @yield('content')
        </div>


        <footer class="footer">
            <div class="container-fluid">

                <div class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Handmind Team</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>
<!--   Core JS Files   -->
<script src="{{ asset('public/assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/bootstrap3-typeahead.min.js') }}" type="text/javascript"></script>
<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('public/assets/js/bootstrap-checkbox-radio.js') }}"></script>
<!--  Charts Plugin -->
<script src="{{ asset('public/assets/js/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('public/assets/js/bootstrap-notify.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('public/assets/js/paper-dashboard.js') }}"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('public/assets/js/demo.js') }}"></script>
<script src="{{ asset('public/assets/js/moment.min.js') }}"></script>
<script src="{{ asset('public/assets/js/fullcalendar.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var BASE_URL = "{{url('/')}}";


        demo.initChartist();
        //        $.notify({
        //            icon: 'ti-gift',
        //            message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."
        //        }, {
        //            type: 'success',
        //            timer: 4000
        //        });
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: moment(),
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            selectHelper: true,
            select: function (start, end) {

                $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd').modal('show');
            },
            eventRender: function (event, element) {
                element.bind('dblclick', function () {
                    $('#ModalEdit #id').val(event.id);
                    $('#ModalEdit #title').val(event.title);
                    $('#ModalEdit #color').val(event.color);
                    $('#ModalEdit').modal('show');
                });
            },
            eventDrop: function (event, delta, revertFunc) { // si changement de position
//                edit(event);
            },
            eventResize: function (event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur
                alert(1);
//                edit(event);
            },

            events: BASE_URL + '/findAll',
            timeFormat: 'H(:mm)' // uppercase H for 24-hour clock
        });

        function edit(event) {
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if (event.end) {
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            } else {
                end = start;
            }
            id = event.id;
            Event = [];
            Event[0] = id;
            Event[1] = start;
            Event[2] = end;

//            $.ajax({
//                url: 'editEventDate.php',
//                type: "POST",
//                data: {Event: Event},
//                success: function (rep) {
//                    if (rep == 'OK') {
//                        alert('Saved');
//                    } else {
//                        alert('Could not be saved. try again.');
//                    }
//                }
//            });
        }

        var path = "{{ route('autocomplete') }}";
        $('input.typeahead').typeahead({
            source: function (query, process) {
                return $.get(path, {
                        query: query
                    },
                    function (data) {
                        $("#suggesstion-box").show();
                        $("#suggesstion-box").html(data);
                    });
            }
        });
        $('input.typeahead').focusout(function () {
            $('#suggesstion-box').hide();
        });
        $('input.typeahead').focusin(function () {
            $('#suggesstion-box').show();
        });
    });
</script>

</html>

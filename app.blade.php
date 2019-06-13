<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->


   

   


    <link href="/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <title>mirit, ez volt
</title>
    <!-- This page CSS -->`

    <link href="/dist/css/style.min.css" rel="stylesheet">

    <link href="/dist/css/pages/dashboard1.css" rel="stylesheet">


    <!-- Date picker plugins css -->
    <link href="/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

    <!-- chartist CSS -->
    <link href="/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" >
    <!-- Dashboard 1 Page CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    @yield('styles')

</head>

<body class="skin-default-dark fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header" style="padding-left:0px">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                      

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->


                      
                        <!-- Light Logo text -->
                         <img src="/ class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <!-- <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li> -->
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <!-- <li class="nav-item"> -->
                    <!-- <form class="app-search d-none d-md-block d-lg-block"> -->
                    <!-- <input type="text" class="form-control" placeholder="Search & enter"> -->
                    <!-- </form> -->
                    <!-- </li> -->
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->





                    <!-- ============================================================== -->
                    <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="index.html"><i class="icon-home"></i></a></li>

                    @guest

                        <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>


                    @else

                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" aria-haspopup="true" aria-expanded="false">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                        @endguest


                        </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">

            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">

                    @if(Auth::check())
                    <li> <a class="waves-effect waves-dark" href="{{route('home')}}" aria-expanded="false"><i class="fas fa-industry"></i><span class="hide-menu"><span class="hide-menu">Home</span></a>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="{{route('category.create')}}" aria-expanded="false"><i class="fas fa-database"></i><span class="hide-menu">Create New Menu</span></a>
                    </li>



                        <li> <a class="waves-effect waves-dark" href="{{route('post.create')}}" aria-expanded="false"><i class="fas fa-user-plus"></i><span class="hide-menu">Create new Blog for Particular Menu</span></a>
                    </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('categories')}}" aria-expanded="false"><i class="fas fa-chevron-circle-down"></i><span class="hide-menu">All Menu</span></a>
                        </li>


                   <li>
                        <a class="waves-effect waves-dark" href="#" id="all_blog_menu" aria-expanded="false">
                            <i class="fas fa-mouse-pointer"></i><span class="hide-menu">All Blog</span>
                        </a>

                        <ul id="all_blog_categories">
                            @foreach($categories as $category)
                            <li>
                                <a href="{{ route('posts', [ 'category_id' => $category->id]) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                                @if($category->children->count() >0 )
                                   <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            @foreach($category->children as $child)
                                                <li><a href="#">{{$child->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                @endif
                            @endforeach
                        </ul>
                    </li>
                   <li> <a class="waves-effect waves-dark" href="{{route('post.trash')}}" aria-expanded="false"><i class="fas fa-trash-restore-alt"><i class="fas fa-trash"></i></i><span class="hide-menu">All Trash Blog</span></a>
                    </li>

                    <li> <a class="waves-effect waves-dark" href="{{route('settings')}}" aria-expanded="false"><i class="fas fa-user-cog"></i><span class="hide-menu">Site Settings</span></a>
                    </li>

              </ul>

                @endif
            </nav>
            <!-- End Sidebar navigation -->
        </div>

    @yield('content')
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->




            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
       
    </footer>
    <!-- ============================================================== -->

    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="assets/node_modules/popper/popper.min.js"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>



<!-- Plugin JavaScript -->
<script src="assets/node_modules/moment/moment.js"></script>
<script src="assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="assets/node_modules/dropify/dist/js/dropify.min.js"></script>

<!-- Date Picker Plugin JavaScript -->
<script src="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<!--stickey kit -->
<script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->

<!-- Popup message jquery -->

<script src="assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- jQuery peity -->
<script src="assets/node_modules/peity/jquery.peity.min.js"></script>
<script src="assets/node_modules/peity/jquery.peity.init.js"></script>



<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}" ></script>

<script>

    @if(Session::has('success'))

    toastr.success("{{Session::get('success')}}")
    @endif



    @if(Session::has('info'))

    toastr.info ("{{Session::get('info')}}")
    @endif





    $('#all_blog_categories').hide();

    $('#all_blog_menu').on('click', function() {
        $('#all_blog_categories').toggle();
    });




</script>


<script>
    // MAterial Date picker
    $('#mdate').bootstrapMaterialDatePicker({ format :'DD/MM/YYYY', weekStart: 0, time: false, currentDate:new Date() });
    $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
    $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
    // Dropify
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });

</script>

@yield('scripts')

</body>

</html>

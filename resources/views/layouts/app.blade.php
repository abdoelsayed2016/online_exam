<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- App title -->
    <title> online Exam Systeme</title>
    <!-- form Uploads -->
    <link href="{{asset('assets/plugins/fileuploads/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Plugins css-->
    <link href="{{asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/select2/dist/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">


    <!-- Editatable  Css-->
    <link rel="stylesheet" href="{{asset('assets/plugins/magnific-popup/dist/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatables-editable/datatables.css')}}" />

    <!-- App CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{route('home')}}" class="logo"><span> <span>Online</span> Exam<span>System</span></span><i class="zmdi zmdi-layers"></i></a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>

                </ul>

                <!-- Right(Notification and Searchbox -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- Notification
                        <div class="notification-box">
                            <ul class="list-inline m-b-0">
                                <li>
                                    <a href="javascript:void(0);" class="right-bar-toggle">
                                        <i class="zmdi zmdi-notifications-none"></i>
                                    </a>
                                    <div class="noti-dot">
                                        <span class="dot"></span>
                                        <span class="pulse"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Notification bar -->
                    </li>
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..."
                                   class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <div class="user-img">
                    <img src="{{asset('assets/images/users/admin.png'}}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">

                </div>
                <h5><a href="#">{{user()->name}}</a> </h5>
                <ul class="list-inline">


                    <li>
                        <a href="#" class="text-custom">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>


                    <li>
                        <a href="add-doctors.html" class="waves-effect"><i class="fa fa-user" aria-hidden="true"></i> <span> Doctors </span> </a>
                    </li>
                    <li>
                        <a href="add-students-Affairs.html" class="waves-effect"><i class="fa fa-users" aria-hidden="true"></i> <span> Students Affairs </span> </a>
                    </li>
                    <li>
                        <a href="add-Courses.html" class="waves-effect"><i class="fa fa-book" aria-hidden="true"></i><span>   Courses </span> </a>
                    </li>


                    <li>
                        <a href="add-student.html" class="waves-effect"><i class="fa fa-users" aria-hidden="true"></i> <span> Students  </span> </a>
                    </li>






                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">


                <div class="row">
                    <div class="col-sm-12 search-box">
                        <div class="panel">
                            <div class="form-group">
                                <fieldset class="the-fieldset">
                                    <legend class="the-legend"> Search</legend>
                                    <div class="form-group col-md-3">
                                        <label >    Courses Name</label>
                                        <div>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label > College Name</label>
                                        <div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-md-3  search-bin">
                                        <a class="btn btn-primary btn-rounded w-md waves-effect waves-light " > Search</a>
                                    </div>

                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-body">

                                <div class="col-lg-12">

                                    <a class="btn btn-success btn-rounded w-md waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add    Courses </a>
                                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Add    Courses </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">


                                                        <form action="#" data-parsley-validate novalidate>
                                                            <div class=" col-md-6">

                                                                <div class="form-group col-md-12">
                                                                    <label for="userName">   Courses  Name*</label>
                                                                    <input type="text" name="nick" parsley-trigger="change" required
                                                                           placeholder="Enter user name" class="form-control" id="userName">
                                                                </div>


                                                                <div class="form-group col-md-12">
                                                                    <label for="sel1">Select  Colleges *</label>
                                                                    <select class="select2 select2-multiple" multiple="multiple" required>
                                                                        <optgroup label="Colleges">
                                                                            <option value="AK">FCI</option>
                                                                            <option value="HI">FCI</option>
                                                                        </optgroup>


                                                                    </select>
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <div class="input_fields_wrap">
                                                                        <a class="add_field_button btn btn-primary btn-rounded w-md waves-effect waves-light ">Add IIOS</a>
                                                                        <div><input type="text" name="mytext[]" class="form-control"></div>
                                                                    </div>

                                                                </div>




                                                            </div>
                                                            <div class=" col-md-6">

                                                                <div class="form-group col-md-12 ">
                                                                    <label>Code</label>
                                                                    <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                                                    <span class="font-13 text-muted">(999) 999-9999</span>
                                                                </div>

                                                                <div class="col-md-12">


                                                                    <h4 class="header-title m-t-0 m-b-30">Add Photo</h4>

                                                                    <input type="file" class="dropify" data-default-file="assets/images/gallery/1.jpg" />

                                                                </div><!-- end col -->




                                                            </div>




                                                        </form>

                                                    </div>



                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Save </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->

                                </div><!-- end col -->



                                <div class="editable-responsive ">
                                    <table class="table table-striped" id="datatable-editable">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Colleges</th>
                                            <th>Code</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="gradeX">
                                            <td> it</td>
                                            <td>
                                                <label class="blue-label">FCI</label>
                                                <label class="purple-label">Science</label>

                                            </td>
                                            <td>
                                                141
                                            </td>
                                            <td class="actions">

                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                <a  class="on-default btn-info"  > <i class="fa fa-keyboard-o"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Mohamed Ahmed</td>
                                            <td> FCI
                                            </td>
                                            <td>IT</td>
                                            <td class="actions">
                                                <a href="#" class="on-default " data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end: panel body -->

                        </div> <!-- end panel -->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <!-- MODAL -->
                <div id="dialog" class="modal-block mfp-hide">
                    <section class="panel panel-info panel-color">
                        <header class="panel-heading">
                            <h2 class="panel-title">Are you sure?</h2>
                        </header>
                        <div class="panel-body">
                            <div class="modal-wrapper">
                                <div class="modal-text">
                                    <p>Are you sure that you want to delete this row?</p>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-md-12 text-right">
                                    <button id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
                                    <button id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
                <!-- end Modal -->


            </div> <!-- content -->

            <footer class="footer">
                2018 - 2019 © Exam System.
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class="side-bar right-bar">
            <a href="javascript:void(0);" class="right-bar-toggle">
                <i class="zmdi zmdi-close-circle-o"></i>
            </a>
            <h4 class="">Notifications</h4>
            <div class="notification-list nicescroll">
                <ul class="list-group list-no-border user-list">
                    <li class="list-group-item">
                        <a href="#" class="user-list-item">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-2.jpg" alt="">
                            </div>
                            <div class="user-desc">
                                <span class="name">Michael Zenaty</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">2 hours ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="user-list-item">
                            <div class="icon bg-info">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">New Signup</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">5 hours ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="user-list-item">
                            <div class="icon bg-pink">
                                <i class="zmdi zmdi-comment"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">New Message received</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">1 day ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item active">
                        <a href="#" class="user-list-item">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-3.jpg" alt="">
                            </div>
                            <div class="user-desc">
                                <span class="name">James Anderson</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">2 days ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item active">
                        <a href="#" class="user-list-item">
                            <div class="icon bg-warning">
                                <i class="zmdi zmdi-settings"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">Settings</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">1 day ago</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /Right-bar -->

    </div>
</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

<!-- Validation js (Parsleyjs) -->
<script type="text/javascript" src="{{asset('assets/plugins/parsleyjs/dist/parsley.min.js')}}"></script>

<!-- Editable js -->
<script src="{{asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/tiny-editable/mindmup-editabletable.js')}}"></script>
<script src="{{asset('assets/plugins/tiny-editable/numeric-input-example.js')}}"></script>
<!-- init -->
<script src="{{asset('assets/pages/datatables.editable.init.js')}}"></script>
<!-- Plugins Js -->
<script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
<script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
<script src="{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
<!-- file uploads js -->
<script src="{{asset('assets/plugins/fileuploads/js/dropify.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/js/jquery.core.js')}}"></script>
<script src="{{asset('assets/js/jquery.app.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
    });
</script>


<script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
</script>
<script>
    jQuery(document).ready(function() {

        //advance multiselect start
        $('#my_multi_select3').multiSelect({
            selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
            selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
            afterInit: function (ms) {
                var that = this,
                    $selectableSearch = that.$selectableUl.prev(),
                    $selectionSearch = that.$selectionUl.prev(),
                    selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                    selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                    .on('keydown', function (e) {
                        if (e.which === 40) {
                            that.$selectableUl.focus();
                            return false;
                        }
                    });

                that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                    .on('keydown', function (e) {
                        if (e.which == 40) {
                            that.$selectionUl.focus();
                            return false;
                        }
                    });
            },
            afterSelect: function () {
                this.qs1.cache();
                this.qs2.cache();
            },
            afterDeselect: function () {
                this.qs1.cache();
                this.qs2.cache();
            }
        });

        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
            maximumSelectionLength: 2
        });

    });

    //Bootstrap-TouchSpin
    $(".vertical-spin").TouchSpin({
        verticalbuttons: true,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        verticalupclass: 'ti-plus',
        verticaldownclass: 'ti-minus'
    });
    var vspinTrue = $(".vertical-spin").TouchSpin({
        verticalbuttons: true
    });
    if (vspinTrue) {
        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
    }

    $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        postfix: '%'
    });
    $("input[name='demo2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        maxboostedstep: 10000000,
        prefix: '$'
    });
    $("input[name='demo3']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });
    $("input[name='demo3_21']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });
    $("input[name='demo3_22']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });

    $("input[name='demo5']").TouchSpin({
        prefix: "pre",
        postfix: "post",
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });
    $("input[name='demo0']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });

    // Time Picker
    jQuery('#timepicker').timepicker({
        defaultTIme : false
    });
    jQuery('#timepicker2').timepicker({
        showMeridian : false
    });
    jQuery('#timepicker3').timepicker({
        minuteStep : 15
    });

    //colorpicker start

    $('.colorpicker-default').colorpicker({
        format: 'hex'
    });
    $('.colorpicker-rgba').colorpicker();

    // Date Picker
    jQuery('#datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-inline').datepicker();
    jQuery('#datepicker-multiple-date').datepicker({
        format: "mm/dd/yyyy",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });

    //Date range picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2016',
        maxDate: '06/30/2016',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary',
        dateLimit: {
            days: 6
        }
    });

    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

    $('#reportrange').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2016',
        maxDate: '12/31/2016',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-success',
        cancelClass: 'btn-default',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Cancel',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });

    //Bootstrap-MaxLength
    $('input#defaultconfig').maxlength()

    $('input#thresholdconfig').maxlength({
        threshold: 20
    });

    $('input#moreoptions').maxlength({
        alwaysShow: true,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger"
    });

    $('input#alloptions').maxlength({
        alwaysShow: true,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger",
        separator: ' out of ',
        preText: 'You typed ',
        postText: ' chars available.',
        validate: true
    });

    $('textarea#textarea').maxlength({
        alwaysShow: true
    });

    $('input#placement').maxlength({
        alwaysShow: true,
        placement: 'top-left'
    });
</script>
<script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong appended.'
        },
        error: {
            'fileSize': 'The file size is too big (1M max).'
        }
    });
</script>
<script>

    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>
</body>
</html>
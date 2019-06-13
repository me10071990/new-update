
@extends('layouts.app')

@section('content')


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
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <div class="text-center">
                            <h4 class="m-b-0 text-white">


                                <b>Edit  settings</b></h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('setting.update')}}" method="post" class="form-bg1">
                                {{ csrf_field() }}

                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <!--/span-->
                                        <!--/span-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Site Name</label>
                                                <input type="text"  name="site_name" class="form-control" placeholder=""value="{{ $settings['site_name'] }}">
                                                <small class="form-control-feedback"> </small>
                                            </div>
                                        </div>

                                        <!--/span-->
                                        </div>

                                        <!--/span-->

                                    </div>
                                    <!--/row-->

                                    <!--/span-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <input type="text" name=address class="form-control" placeholder="" value="{{ $settings['address'] }}">
                                            <small class="form-control-feedback"> </small>
                                        </div>
                                    </div>

                                    <!--/span-->
                                    <!--/span-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Contact Phone number</label>
                                            <input type="text" class="form-control" name="contact_number" placeholder="" value="{{ $settings['contact_number'] }}">
                                            <small class="form-control-feedback"> </small>
                                        </div>
                                    </div>

                                    <!--/span-->
                                    <!--/span-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Contact Email</label>
                                            <input type="text" class="form-control"  name="contact_email" placeholder="" value="{{ $settings['contact_email'] }}">
                                            <small class="form-control-feedback"> </small>
                                        </div>
                                    </div>

                                    <!--/span-->
                                <div class="form-actions">

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update details</button>

                                    </div>

                                    <!--/row-->

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
            <!-- Row -->
@stop


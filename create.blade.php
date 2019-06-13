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


                                    <div class="panel panel-default">
                                        <div class="panel-heading" >
                                            <div class="text-center">

                                                <b>Create new Menu or SubMenu</b>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <form action="{{route('category.store')}}" method="post">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for=""></label>
                                                    <select name="parent_id" id="parent_id">
                                                        <option value="0">Create New Menu</option>
                                                        @foreach($levels as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">

                                                    <div class="text-center table-dark">
                                                        <label for ="Name" class="table-dark ">Name</label>
                                                    </div>

                                                    <input type="text" name="name" class="form-control">

                                                </div>

                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <button class="btn btn-success" type="submit">

                                                            Add Sub-Menu
                                                        </button>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div>


                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row -->
@stop
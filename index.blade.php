
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
                                        <div class="panel-heading">

                                            <div class="text-center"><b>All Menu</b></div>

                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-hover table-dark">
                                                <thead>
                                                <th>
                                                    Menu name
                                                </th>


                                                <th>
                                                    Submenu-name or id
                                                </th>
                                                <th>
                                                    Edit
                                                </th>
                                                <th>
                                                    Delete
                                                </th>
                                                </thead>

                                                <tbody>
                                                <tr>


                                                    <ul >
                                                        @foreach($levels as $category)
                                                    <tr>
                                                            <td>
                                                            @if($category->children->count() >0 )
                                                               <li class="dropdown">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                        {{$category->name}}
                                                                        <b class="caret"></b></a>
                                                                    <ul class="dropdown-menu">
                                                                        @foreach($category->children as $child)
                                                                            <li><a href="#">{{$child->name}}</a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @else
                                                                <li><a href="">{{$category->name}}</a></li>
                                                            @endif

                                                            </td>

                                                        <td>{{$category->parent_id}}</td>

                                                       <td> <a href="{{route('category.edit', ['id' =>$category->id])}}" class="btn btn-sm btn-info">Edit</a>
                                                            <td>    <a href="{{route('category.delete', ['id' =>$category->id])}}" class="btn btn-sm btn-danger">Delete</a></td>
                                                        @endforeach

                                                    </ul>

                                                </tr>

                                                </tbody>
                                            </table>
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


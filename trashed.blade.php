
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
                                                    Image
                                                </th>
                                                <th>
                                                    Title
                                                </th>
                                                <th>
                                                    Restore
                                                </th>

                                                <th>
                                                    Delete
                                                </th>
                                                </thead>



                                                <tbody>
                                                @if($posts->count() > 0)
                                                    @foreach($posts as $post)
                                                        <tr>

                                                            <td>
                                                                <img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="110px">
                                                            </td>
                                                            <td>
                                                                {{ $post->title }}
                                                            </td>

                                                            <td>
                                                                <a href="{{route('post.restore',['id'=>$post->id])}}" class=" btn btn-sm btn-info">Restore</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{route('post.kills', ['id'=>$post->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <th colspan="5" class="text-center">No Any Trash Post yet.</th>
                                                    </tr>
                                                @endif
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


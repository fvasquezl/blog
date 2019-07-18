@extends('layouts.admin')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Posts</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt"></i> <a href="{{route('admin')}}"> Admin</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-eye nav-icon"></i> Posts</li>
            </ol>
        </div>
    </div>
@stop

@push('scripts')
    <script>
        $(function () {
            $('#posts_table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Posts Listing</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="posts_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Excerpt</th>
                    <th>Actions</th>
                </tr>
                </thead>
               <tbody>
                 @foreach($posts as $post)
                     <tr>
                         <td>{{$post->id}}</td>
                         <td>{{$post->title}}</td>
                         <td>{{$post->excerpt}}</td>
                         <td>
                             <a href="#" class="btn btn-default btn-sm"><i class="fas fa-eye"></i></a>
                             <a href="#" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                             <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                         </td>
                     </tr>

                 @endforeach
               </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
@stop
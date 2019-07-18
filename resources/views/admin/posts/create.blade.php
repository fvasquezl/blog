@extends('layouts.admin')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Create Posts</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt"></i> <a href="{{route('admin')}}">
                        Admin</a></li>
                <li class="breadcrumb-item"><i class="fas fa-eye nav-icon"></i> <a
                            href="{{route('admin.posts.index')}}">Posts</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-pencil-alt nav-icon"></i> Create</li>
            </ol>
        </div>
    </div>
@stop

<styles>

</styles>

@push('scripts')
    <script>
        $('#published_at').datepicker()
    </script>
@endpush

@section('content')
    <form>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input name="title"
                                   id="title"
                                   type="text"
                                   class="form-control"
                                   placeholder="Post Title">
                        </div>
                        <div class="form-group">
                            <label for="body">Post Body</label>
                            <textarea name="body"
                                      id="body"
                                      class="form-control"
                                      placeholder="Post Body"
                                      rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="published_at">Published At</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                  </span>
                                </div>
                                <input name="published_at" type="text" class="form-control float-right datepicker" id="published_at" >
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="excerpt">Post Excerpt</label>
                            <textarea name="excerpt"
                                      id="excerpt"
                                      class="form-control"
                                      placeholder="Post Excerpt"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
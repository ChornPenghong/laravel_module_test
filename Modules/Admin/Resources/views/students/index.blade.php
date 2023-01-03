@extends('admin::layouts.master')
@section('page-title')
    <h2>Students</h2>
@endsection
@section('right-title')
    <h2>Index</h2>
@endsection
@section('content')
    <div class="d-flex justify-content-between">
        
        <div class="">
            <form action="" id="filter">
                <div class="input-group">
                    <input type="text" class="form-control col-md-12" name="search" placeholder="Search by Name" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-default border">Search</button>
                    <a href="{{ url('admin') }}" class="btn btn-danger border">Clear</a>
                </div>
            </form>
        </div>
        <div class="">
            <a href="{{ url('admin/create') }}"><button class="btn btn-primary"><i class="fas fa-edit"></i>Add New</button></a>
            <a href="{{ url('admin/view_deleted_record') }}"><button class="btn btn-secondary">View Deleted Students</button></a>
        </div>
    </div>

    @include('admin::students.table')
    {{  $students->links()}}
@endsection

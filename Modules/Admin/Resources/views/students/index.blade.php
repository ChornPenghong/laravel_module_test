@extends('admin::layouts.master')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="">
                <a href="{{ url('admin/create') }}"><button class="btn btn-primary">Add New</button></a>
                <a href="{{ url('admin/view_deleted_record') }}"><button class="btn btn-secondary">View Deleted Students</button></a>
            </div>
            <div class="">
                <form action="" id="filter">
                    <div class="input-group">
                        <input type="text" class="form-control col-md-9" name="search" placeholder="Search by Name" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-default border">Search</button>
                        <a href="{{ url('admin') }}" class="btn btn-default border">Clear</a>
                    </div>
                </form>
            </div>
        </div>

        @include('admin::students.table')
        {{  $students->links()}}
    </div>
</div>
@endsection

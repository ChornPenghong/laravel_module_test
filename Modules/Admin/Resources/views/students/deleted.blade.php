@extends('admin::layouts.master')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="">
                <a href="{{ url('admin') }}"><button class="btn btn-warning">Back</button></a>
                <a href="{{ url('admin/restoreAll') }}"><button class="btn btn-primary">Restore All</button></a>
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
        <table class="table table-striped m-2">
            <thead>
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Full Name</th>
                    <th scope="col" class="text-center">Gender</th>
                    <th scope="col" class="text-center">Phone Number</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $index => $list)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center text-capitalize">{{ $list->name }}</td>
                        <td class="text-center text-capitalize">{{ $list->gender }}</td>
                        <td class="text-center">{{ $list->phone }}</td>
                        <td class="text-center">
                            <a href="{{ route('students.restore', $list->id) }}"><button class="btn btn-success">Restore</button></a>
                        </td>
                    </tr>   
                @empty
                    <tr>
                        <td colspan="99" class="text-center">No Record</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</div>
@endsection
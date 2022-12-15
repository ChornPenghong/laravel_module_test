@extends('admin::layouts.master')
@section('content')
    <div class="container mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add Student</h3>
                </div>
                <div class="card-body">
                    <form id="createStudent" action="{{ url('admin/store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <select id="gender" class="form-control col-sm-10" name="gender">
                              <option value="null">Select an option</option>
                              <option value="male">Male</option>
                              <option value="male">Female</option>
                            </select>
                          </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <hr>
                        <div class="text-right">
                            <a href="{{ route('students') }}"><button type="button"class="btn btn-default">Cancel</button></a>
                            <button type="submit" class="btn btn-primary" form="createStudent">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

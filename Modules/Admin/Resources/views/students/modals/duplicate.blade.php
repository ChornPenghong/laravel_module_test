<div class="modal fade" id="duplicate_{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="updateStudent" action="{{ url('admin/duplicate/' . $list->id) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $list->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <select id="gender" class="form-control col-sm-10" name="gender" value="{{ $list->gender }}" >
                      <option value="">Select an option</option>
                      <option value="male" {{ $list->gender == 'male' ? 'selected' : '' }}>Male</option>
                      <option value="female"  {{ $list->gender == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                  </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $list->phone }}">
                    </div>
                </div>
                <hr>
                <div class="text-right">
                    <a href="{{ route('students') }}"><button type="button"class="btn btn-default">Cancel</button></a>
                    <button type="submit" class="btn btn-primary" form="updateStudent">Save Change</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
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
                    <button class="btn btn-warning" data-toggle="modal" data-target="#duplicate_{{ $list->id }}">Duplicate</button>
                    <a href="{{ route('students.show', $list->id) }}"><button class="btn btn-success">Edit</button></a>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteStudent_{{ $list->id }}">Delete</button>
                </td>
                @include('admin::students.modals.delete')
                @include('admin::students.modals.duplicate')
            </tr>   
        @empty
            <tr>
                <td colspan="99" class="text-center">No Record</td>
            </tr>
        @endforelse

    </tbody>
</table>
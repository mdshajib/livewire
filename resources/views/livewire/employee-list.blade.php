<div>
    <div class="row mt-2 pt-2">
        <div class="col-md-12">
            <table class="table table-success table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Department</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Joining Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $index => $employee)
                    <tr>
                        <td> {{ $employee->full_name }} </td>
                        <td> {{ $employee->email }} </td>
                        <td> {{ $employee->phone }} </td>
                        <td> {{ $employee->address }} </td>
                        <td> {{ $employee->department }} </td>
                        <td> {{ $employee->designation }} </td>
                        <td> {{ $employee->joining_date }} </td>
                        <td> 
                            <a href="/employee/{{ $employee->id}}" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger" wire:click="Delete({{ $employee->id}})">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

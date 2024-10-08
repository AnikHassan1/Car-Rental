<div class="container">
    <h2>Manage Customer</h2>
    <table class="table-responsive" id="tableData">
        <thead>
            <tr class="bg-light">
                <th >Customer Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tableList">
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->user ? $user->user->name : 'N/A' }}</td> <!-- Check if user exists -->
                    <td>{{ $user->user ? $user->user->email : 'N/A' }}</td>
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->address }}</td>
                    <td>
                        <button class="btn btn-danger deleteRen" data-id="{{ $user->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script>
    new DataTable('#tableData'),{
        lengthMenu:[10,20,30,40]
    }
</script>

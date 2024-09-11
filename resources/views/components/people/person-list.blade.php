<div class="container">
    <div class="col-20">

        <div class="text-center mb-2">
            <h1>People List</h1>
        </div>

        <div class="text-left mb-2">

            <form action="{{ url('people/create') }}" method="GET" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success">Add Person</button>
            </form>

        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @foreach($people as $person)
                    <td>{{$person->id}}</td>
                    <td>{{$person->name}}</td>
                    <td>{{$person->birth_date}}</td>
                    <td>{{$person->email}}</td>
                        <td>
                            @if ($person->address)
                                {{ $person->address->address }}
                            @else
                                No  Address
                            @endif
                        </td>

                    <td>
                        <div class="d-flex justify-content-around">
                            <a href="{{url('people/' . $person->id)}}" type="button" class="btn btn-success">Show</a>
                            <a href="{{url('people/' . $person->id . '/edit')}}" type="button" class="btn btn-primary">Edit</a>
                            <form action="{{url('people/' . $person->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


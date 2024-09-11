<div class="container">
    <div class="col-20">

        <div class="text-center mb-2">
            <h1>Pets List</h1>
        </div>

        <div class="text-left mb-2">

            <form action="{{ url('pets/create') }}" method="GET" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success">Add Pet</button>
            </form>

        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Owner</th>
                <th scope="col">Color</th>
                <th scope="col">Birthday</th>
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

                @foreach($pets as $pet)
                    <td>{{$pet->id}}</td>
                    <td>{{$pet->name}}</td>

                        <td>
                            @if ($pet->person)
                                {{ $pet->person->name }}
                            @else
                                No  Owner
                            @endif
                        </td>
                    <td>{{$pet->color}}</td>
                    <td>{{$pet->birthday}}</td>

                    <td>
                        <div class="d-flex justify-content-around">
                            <a href="{{url('pets/' . $pet->id)}}" type="button" class="btn btn-success">Show</a>
                            <a href="{{url('pets/' . $pet->id . '/edit')}}" type="button" class="btn btn-primary">Edit</a>
                            <form action="{{url('pets/' . $pet->id)}}" method="POST">
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


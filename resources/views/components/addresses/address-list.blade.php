<div class="container">
    <div class="col-20">

        <div class="text-center mb-2">
            <h1>Addresses List</h1>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif


        </div>

        <div class="text-left mb-2">

            <form action="{{ url('addresses/create') }}" method="GET" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success">Add Address</button>
            </form>

        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
                <th scope="col">Postal Code</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($addresses as $address)
                        <td>{{$address->id}}</td>
                        <td>{{$address->address}}</td>
                        <td>{{$address->city}}</td>
                        <td>{{$address->country}}</td>
                        <td>{{$address->postcode}}</td>

                        <td>
                        <div class="d-flex justify-content-around">
                            <a href="{{url('addresses/' . $address->id)}}" type="button" class="btn btn-success">Show</a>
                            <a href="{{url('addresses/' . $address->id . '/edit')}}" type="button" class="btn btn-primary">Edit</a>
                            <form action="{{url('addresses/' . $address->id)}}" method="POST">
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


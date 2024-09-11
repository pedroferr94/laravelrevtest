<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        autocomplete="name"
                        placeholder="Type your name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ $person->name }}"
                        readonly
                        aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">{{$person->name}}</small>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                    <textarea
                        id="birth_date"
                        name="birth_date"
                        autocomplete="birth_date"
                        placeholder="Type a birth_date"
                        class="form-control @error('birth_date') is-invalid @enderror"
                        readonly
                        aria-describedby="birth_dateHelp">{{ $person->birth_date }}</textarea>
                    @error('birth_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <textarea
                        id="email"
                        name="email"
                        autocomplete="email"
                        placeholder="Type a email"
                        class="form-control @error('email') is-invalid @enderror"
                        readonly
                        aria-describedby="emailHelp">{{ $person->email }}</textarea>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address_id">Address</label>
                    <textarea
                        id="address_id"
                        name="address_id"
                        autocomplete="address_id"
                        placeholder="Type a address_id"
                        class="form-control @error('address_id') is-invalid @enderror"
                        readonly
                        aria-describedby="address_idHelp">{{ $person->address->address}}</textarea>
                    @error('address_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <a href="{{ url('people') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>

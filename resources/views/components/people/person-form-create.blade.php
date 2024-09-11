<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="row justify-content-center">
                <h1>Add a new person</h1>
            </div>
            <form method="POST" action="{{ url('people') }}">
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
                        value="{{ old('name') }}"
                        required
                        aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">Your name is safe with us.</small>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                    <input
                        type="text"
                        id="birth_date"
                        name="birth_date"
                        autocomplete="birth_date"
                        placeholder="Type your birth date"
                        class="form-control @error('birth_date') is-invalid @enderror"
                        value="{{ old('birth_date') }}"
                        required
                        aria-describedby="birth_dateHelp">
                    <small id="birth_dateHelp" class="form-text text-muted">Your birth date is safe with us.</small>
                    @error('birth_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="text"
                        id="email"
                        name="email"
                        autocomplete="email"
                        placeholder="Type your email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        required
                        aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Your email is safe with us.</small>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address_id">Address</label>
                    <select
                        id="address_id"
                        name="address_id"
                        class="form-control @error('address_id') is-invalid @enderror"
                        required>
                        <option value="">Select an address</option>
                        @foreach($addresses as $address)
                            <option value="{{ $address->id }}">{{ $address->address }}</option>
                        @endforeach
                    </select>
                    @error('address_id')
                    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                    @enderror
                </div>


                <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

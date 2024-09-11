<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="row justify-content-center">
                <h1>Add a new pet</h1>
            </div>
            <form method="POST" action="{{ url('pets') }}">
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
                    <label for="person_id">Owner</label>
                    <select
                        id="person_id"
                        name="person_id"
                        class="form-control @error('person_id') is-invalid @enderror"
                        required
                        aria-describedby="person_idHelp">
                        <option value="">Select the owner</option>
                        @foreach($people as $person)
                            <option value="{{ $person->id }}">{{ $person->name }}</option>
                        @endforeach
                    </select>
                    <small id="person_idHelp" class="form-text text-muted">Owner name is safe with us.</small>
                    @error('person_id')
                    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="color">Color</label>
                    <input
                        type="text"
                        id="color"
                        name="color"
                        autocomplete="color"
                        placeholder="Type your color"
                        class="form-control @error('color') is-invalid @enderror"
                        value="{{ old('color') }}"
                        required
                        aria-describedby="colorHelp">
                    <small id="colorHelp" class="form-text text-muted">Your email is safe with us.</small>
                    @error('color')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input
                        type="text"
                        id="birthday"
                        name="birthday"
                        autocomplete="birthday"
                        placeholder="Type your birthday"
                        class="form-control @error('address') is-invalid @enderror"
                        value="{{ old('birthday') }}"
                        required
                        aria-describedby="birthdayHelp">
                    <small id="birthdayHelp" class="form-text text-muted">Your address is safe with us.</small>
                    @error('birthday')
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

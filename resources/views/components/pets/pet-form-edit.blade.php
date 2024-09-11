<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ url('pets/' . $pet->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        autocomplete="name"
                        placeholder="Type your name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ $pet->name }}"
                        required
                        aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">{{$pet->name}}</small>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="person_id">Owner</label>
                    <input
                        type="text"
                        id="person_id"
                        name="person_id"
                        autocomplete="person_id"
                        placeholder="Type your owner name"
                        class="form-control @error('person_id') is-invalid @enderror"
                        value="{{ optional($pet->person)->name ?? 'No owner' }}"
                        required
                        aria-describedby="person_idHelp">
                    <small id="person_idHelp" class="form-text text-muted">{{$pet->person->name}}</small>
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
                        value="{{ $pet->color }}"
                        required
                        aria-describedby="colorHelp">
                    <small id="colorHelp" class="form-text text-muted">{{$pet->color}}</small>
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
                        class="form-control @error('birthday') is-invalid @enderror"
                        value="{{ $pet->birthday }}"
                        required
                        aria-describedby="birthdayHelp">
                    <small id="birthdayHelp" class="form-text text-muted">{{$pet->birthday}}</small>
                    @error('birthday')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <button type="submit" class="mt-2 mb-5 btn btn-primary">Save Changes</button>
                <a href="{{ url('pets') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>

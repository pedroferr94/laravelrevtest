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
                        value="{{ $pet->name }}"
                        readonly
                        aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">{{ $pet->name }}</small>
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
                        readonly
                        aria-describedby="person_idHelp">
                    <small id="person_idHelp" class="form-text text-muted">{{ optional($pet->person)->name ?? 'No owner' }}</small>
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
                        readonly
                        aria-describedby="colorHelp">
                    <small id="colorHelp" class="form-text text-muted">{{ $pet->color }}</small>
                    @error('color')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input
                        type="date"
                        id="birthday"
                        name="birthday"
                        autocomplete="birthday"
                        placeholder="Type your birthday"
                        class="form-control @error('birthday') is-invalid @enderror"
                        value="{{ $pet->birthday }}"
                        readonly
                        aria-describedby="birthdayHelp">
                    <small id="birthdayHelp" class="form-text text-muted">{{ $pet->birthday }}</small>
                    @error('birthday')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <a href="{{ url('pets') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>

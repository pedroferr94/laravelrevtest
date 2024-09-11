<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row justify-content-center">
        <h1>Add a new address</h1>
                </div>
            <form method="POST" action="{{ url('addresses') }}">
                @csrf
                <div class="form-group">
                    <label for="address">Address</label>
                    <input
                        type="text"
                        id="address"
                        name="address"
                        autocomplete="address"
                        placeholder="Type your address"
                        class="form-control @error('address') is-invalid @enderror"
                        value="{{ old('address') }}"
                        required
                        aria-describedby="addressHelp">
                    <small id="addressHelp" class="form-text text-muted">Your address is safe with us.</small>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input
                        type="text"
                        id="city"
                        name="city"
                        autocomplete="city"
                        placeholder="Type your city"
                        class="form-control @error('city') is-invalid @enderror"
                        value="{{ old('city') }}"
                        required
                        aria-describedby="cityHelp">
                    <small id="cityHelp" class="form-text text-muted">Your city is safe with us.</small>
                    @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input
                        type="text"
                        id="country"
                        name="country"
                        autocomplete="country"
                        placeholder="Type your country"
                        class="form-control @error('country') is-invalid @enderror"
                        value="{{ old('country') }}"
                        required
                        aria-describedby="countryHelp">
                    <small id="countryHelp" class="form-text text-muted">Your country is safe with us.</small>
                    @error('country')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="postcode">Postal Code</label>
                    <input
                        type="text"
                        id="postcode"
                        name="postcode"
                        autocomplete="postcode"
                        placeholder="Type your postcode"
                        class="form-control @error('postcode') is-invalid @enderror"
                        value="{{ old('postcode') }}"
                        required
                        aria-describedby="postcodeHelp">
                    <small id="postcodeHelp" class="form-text text-muted">Your postal code is safe with us.</small>
                    @error('postcode')
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

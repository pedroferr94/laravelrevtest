<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ url('addresses/' . $address->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="address">Address</label>
                    <input
                        type="text"
                        id="address"
                        name="address"
                        autocomplete="address"
                        placeholder="Type your address"
                        class="form-control @error('address') is-invalid @enderror"
                        value="{{ $address->address }}"
                        required
                        aria-describedby="addressHelp">
                    <small id="addressHelp" class="form-text text-muted">{{$address->address}}</small>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <textarea
                        id="city"
                        name="city"
                        autocomplete="city"
                        placeholder="Type a city"
                        class="form-control @error('city') is-invalid @enderror"
                        required
                        aria-describedby="cityHelp">{{ $address->city }}</textarea>
                    @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <textarea
                        id="country"
                        name="country"
                        autocomplete="country"
                        placeholder="Type a country"
                        class="form-control @error('country') is-invalid @enderror"
                        required
                        aria-describedby="countryHelp">{{ $address->country }}</textarea>
                    @error('country')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="postcode">Postal Code</label>
                    <textarea
                        id="postcode"
                        name="postcode"
                        autocomplete="postcode"
                        placeholder="Type a postcode"
                        class="form-control @error('postcode') is-invalid @enderror"
                        required
                        aria-describedby="postcodeHelp">{{ $address->postcode }}</textarea>
                    @error('postcode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <button type="submit" class="mt-2 mb-5 btn btn-primary">Save Changes</button>
                <a href="{{ url('addresses') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>

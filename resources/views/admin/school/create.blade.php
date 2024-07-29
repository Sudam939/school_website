<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header justify-content-between align-items-center">
                    <h5>School Create</h5>
                    <a href="{{ route('school.index') }}" class="btn btn-primary"><i data-feather='arrow-left'></i>Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('school.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <label for="name">School Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" value="{{old("name")}}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="slogan">Slogan <span class="text-danger">*</span></label>
                                <input type="text" name="slogan" id="slogan" class="form-control" value="{{old("slogan")}}">
                                @error('slogan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" id="address" class="form-control" value="{{old("address")}}">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" id="email" class="form-control" value="{{old("email")}}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{old("phone")}}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="tel">Tel-Number <span class="text-danger">*</span></label>
                                <input type="text" name="tel" id="tel" class="form-control" value="{{old("tel")}}">
                                @error('tel')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="office">Office Hour <span class="text-danger">*</span></label>
                                <input type="text" name="office" id="office" class="form-control" value="{{old("office")}}">
                                @error('office')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="map">Map </label>
                                <input type="textarea" name="map" id="map" class="form-control" value="{{old("map")}}">
                                @error('map')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="facebook">Facebook </label>
                                <input type="text" name="facebook" id="facebook" class="form-control" value="{{old("facebook")}}">
                                @error('facebook')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="youtube">Youtube </label>
                                <input type="text" name="youtube" id="youtube" class="form-control" value="{{old("youtube")}}">
                                @error('youtube')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="logo">Logo </label>
                                <input type="file" name="logo" id="logo" class="form-control">
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
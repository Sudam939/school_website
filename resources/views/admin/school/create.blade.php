<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>School Create</h5>
                    <a href="{{ route('school.index') }}" class="btn btn-primary"><i data-feather="arrow-right"></i> go
                        back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('school.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="name">School Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 form-group">
                                <label for="slogan">School Slogan <span class="text-danger">*</span></label>
                                <input type="text" name="slogan" id="slogan" class="form-control"
                                    value="{{ old('slogan') }}">
                                @error('slogan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="col-6 form-group">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" id="phone" class="form-control">
                            </div>

                            <div class="col-6 form-group">
                                <label for="tel">Telephone Number</label>
                                <input type="tel" name="tel" id="tel" class="form-control">
                            </div>

                            <div class="col-6 form-group">
                                <label for="office_hour">Office Hour <span class="text-danger">*</span></label>
                                <input type="text" name="office_hour" id="office_hour" class="form-control">
                            </div>

                            <div class="col-6 form-group">
                                <label for="map">Map</label>
                                <input type="text" name="map" id="map" class="form-control">
                            </div>

                            <div class="col-6 form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" name="facebook" id="facebook" class="form-control">
                            </div>

                            <div class="col-6 form-group">
                                <label for="youtube">Youtube</label>
                                <input type="text" name="youtube" id="youtube" class="form-control">
                            </div>

                            <div class="col-6 form-group">
                                <label for="logo">Logo <span class="text-danger">*</span></label>
                                <input type="file" name="logo" id="logo" class="form-control">
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

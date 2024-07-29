<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header justify-content-between align-items-center">
                    <h5>Notice Create</h5>
                    <a href="{{ route('notice.index') }}" class="btn btn-primary"><i data-feather='arrow-left'></i>Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('notice.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-5">
                            <div class="col-6">
                                <label for="subject">Subject<span class="text-danger">*</span></label>
                                <input type="text" name="subject" id="subject" class="form-control" value="{{old("subject")}}">
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="image">Image </label>
                                <input type="file" name="image" id="image" class="form-control">
                                @error('image')
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

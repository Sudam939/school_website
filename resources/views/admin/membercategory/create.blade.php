<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header justify-content-between align-items-center">
                    <h5>Member Category Create</h5>
                    <a href="{{ route('membercategory.index') }}" class="btn btn-primary"><i data-feather='arrow-left'></i>Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('membercategory.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-5">
                            <div class="col-6">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control" value="{{old("title")}}">
                                @error('title')
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

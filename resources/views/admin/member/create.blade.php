<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header justify-content-between align-items-center">
                    <h5>Member Create</h5>
                    <a href="{{ route('member.index') }}" class="btn btn-primary"><i data-feather='arrow-left'></i>Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-5">
                            <div class="col-12 py-2">
                                <label for="member_category_id">Select Member Category</label>
                                <select name="member_category_id" id="member_category_id" class="form-control">
                                    @foreach ($membercategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-6 py-2">
                                <label for="name">Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 py-2">
                                <label for="designation">Designation<span class="text-danger">*</span></label>
                                <input type="text" name="designation" id="designation" class="form-control"
                                    value="{{ old('designation') }}">
                                @error('designation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-6 py-2">
                                <label for="email">Email<span class="text-danger">*</span></label>
                                <input type="text" name="email" id="email" class="form-control"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 py-2">
                                <label for="phone">Phone<span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 py-2">
                                <label for="image">Image </label>
                                <input type="file" name="image" id="image" class="form-control">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 pt-3">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

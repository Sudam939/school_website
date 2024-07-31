<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Member Category</h5>
                    <a href="{{ route('membercategory.create') }}" class="btn btn-primary"><i data-feather="plus"></i> add new</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($membercategories as $index => $membercategory)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{$membercategory->title}}</td>
                                        <td>
                                            <a href="{{ route('membercategory.edit', $membercategory->id) }}"><i data-feather="edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

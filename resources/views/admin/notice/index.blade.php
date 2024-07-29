<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Notices</h5>
                    <a href="{{ route('notice.create') }}" class="btn btn-primary"><i data-feather="plus"></i> add new</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Subject</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notices as $index => $notice)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{$notice->subject}}</td>
                                        <td>
                                            <img width="120" src="{{asset($notice->image)}}" alt="">
                                        </td>
                                        <td>
                                            <a href="{{ route('notice.edit', $notice->id) }}"><i data-feather="edit"></i></a>
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

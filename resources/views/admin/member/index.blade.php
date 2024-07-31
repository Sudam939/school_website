<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Members</h5>
                    <a href="{{ route('member.create') }}" class="btn btn-primary"><i data-feather="plus"></i> add new</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Member Category</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Designation</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $index => $member)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $member->member_category->title }}</td>
                                        <td>{{ $member->name }}</td>
                                        <td>
                                            <img width="120" src="{{ asset($member->image) }}" alt="">
                                        </td>
                                        <td>{{ $member->designation }}</td>
                                        <td>{{ $member->phone }}</td>
                                        <td>
                                            <a href="{{ route('member.edit', $member->id) }}"><i
                                                    data-feather="edit"></i></a>
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

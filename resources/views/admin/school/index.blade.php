<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>School</h5>
                    @if (empty($school))
                        <a href="{{ route('school.create') }}" class="btn btn-primary"><i data-feather="plus"></i> add</a>
                    @endif
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($school))
                                    <tr>
                                        <td>1</td>
                                        <td>logo</td>
                                        <td>CODEIT School</td>
                                        <td>Dharan-1</td>
                                        <td>65476547657</td>
                                        <td>
                                            edit delete
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

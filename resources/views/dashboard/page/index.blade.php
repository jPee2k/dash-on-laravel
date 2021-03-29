@extends('layouts.admin')

@section('title', 'Pages')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 card-margin">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Pages</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="pages_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="pages" class="table table-striped table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="pages_info">
                                            <thead>
                                                <tr role="row">
                                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 7%;">ID</th>
                                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 30%;">Name</th>
                                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 21%;">Status</th>
                                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1" aria-label="Created_at: activate to sort column ascending" style="width: 21%;">Created_at</th>
                                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1" aria-label="Updated_at: activate to sort column ascending" style="width: 21%;">Updatet_at</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pages as $key => $page)
                                                    <tr role="row" class="{{ \App\Services\helpers\is_even($key) ? 'even' : 'odd' }}">
                                                        <td>{{ $page->id }}</td>
                                                        <td class="sorting_1">{{ $page->name }}</td>
                                                        <td>{{ $page->status }}</td>
                                                        <td>{{ $page->created_at }}</td>
                                                        <td>{{ $page->updated_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3 mr-auto ml-auto">
                                        {{ $pages->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

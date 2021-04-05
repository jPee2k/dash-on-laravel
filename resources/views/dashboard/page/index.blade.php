@extends('layouts.dash')

@section('title', 'Pages')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Pages</h5>
        </div>
        <div class="card-body">
            <a href="{{ route('pages.create') }}"
               class="btn btn-sm btn-outline-primary form-sbt float-right ml-2 mb-2 px-4">Add New</a>
            <div class="table-responsive">

                <div id="pages_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="pages" class="table table-striped table-bordered dataTable no-footer"
                                   style="width: 100%;" role="grid" aria-describedby="pages_info">
                                <thead>
                                <tr role="row">
                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1"
                                        aria-label="ID: activate to sort column ascending" style="width: 7%;">ID
                                    </th>
                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 30%;">Name
                                    </th>
                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Slug
                                    </th>
                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending">Status
                                    </th>
                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1"
                                        aria-label="Created_at: activate to sort column ascending">Created_at
                                    </th>
                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1"
                                        aria-label="Updated_at: activate to sort column ascending">Updatet_at
                                    </th>
                                    <th tabindex="0" aria-controls="pages" rowspan="1" colspan="1"
                                        aria-label="Updated_at: activate to sort column ascending">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($pages as $key => $page)
                                    <tr role="row" class="{{ \App\Services\helpers\is_even($key) ? 'even' : 'odd' }}">
                                        <td>{{ $page->id }}</td>
                                        <td>{{ $page->name }}</td>
                                        <td>{{ $page->slug }}</td>
                                        <td>{{ $page->status }}</td>
                                        <td>{{ $page->created_at }}</td>
                                        <td>{{ $page->updated_at }}</td>
                                        <td class="text-center">
                                            <a class="pr-1" href="{{ route('pages.edit', $page) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-pencil-square"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd"
                                                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </a>
                                            <a class="pr-1" href="{{ route('pages.destroy', $page) }}"
                                               data-confirm="Are you sure?" data-method="delete" rel="nofollow">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </a>
                                        </td>
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
@endsection

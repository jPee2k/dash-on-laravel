@extends('layouts.dash')

@section('title', 'Edit Page')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Edit Page</h5>
        </div>
        {{ Form::model($page, ['method' => 'PATCH', 'url' => route('pages.update', $page), 'files' => true, 'id' => 'page-form', 'role' => 'form', 'autocomplete' => 'off']) }}
        <div class="card-body">
            {{-- tabs --}}
            @include('dashboard.page.form.tabs')

            {{-- content --}}
            <div class="tab-content" id="nav-tab-content">
                {{-- main-data tab --}}
                <div class="tab-pane fade active show col-md-9 col-lg-6" id="nav-main-data" role="tabpanel"
                     aria-labelledby="nav-main-tab">
                    @include('dashboard.page.form.main-form-fields')
                </div>

                {{-- meta-tags tab --}}
                <div class="tab-pane fade col-md-9 col-lg-6" id="nav-meta-tags" role="tabpanel"
                     aria-labelledby="nav-meta-tab">
                    @include('dashboard.page.form.meta-form-fields')
                </div>

                {{-- content tab --}}
                <div class="tab-pane fade col-md-12 col-lg-9" id="nav-content" role="tabpanel"
                     aria-labelledby="nav-content-tab">
                    @include('dashboard.page.form.content-form-fields')
                </div>

                {{-- custom-fields tab --}}
                <div class="tab-pane fade col-md-12 col-lg-9" id="nav-fields" role="tabpanel"
                     aria-labelledby="nav-fields-tab">
                    @include('dashboard.page.form.custom-form-fields')
                    {{ Form::close() }}

                    {{ Form::open(['method' => 'POST', 'data-url' => route('custom-fields.store'), 'id' => 'custom-fields-form']) }}
                    {{--custom-fields WRAPPER--}}
                    <div id="custom-fields-area" data-url={{ route('pages.fields', 'template-id') }}></div>

                    <div class="col-11 col-lg-12 text-right ml-5 mt-2 mb-0">
                        <button id="save-custom-fields" class="btn btn-sm btn-warning px-4 hidden">Save Data</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="card-footer bg-white text-right">
            <button type="submit" form="page-form" class="btn btn-primary mr-2">{{ $submitName }}</button>
            <button type="reset" form="page-form" class="btn btn-outline-primary">Cancel</button>
        </div>
    </div>
@endsection

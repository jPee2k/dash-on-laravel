@extends('layouts.admin')

@section('title', 'Edit Page')
@section('content')
    <div class="card card-margin">
        <div class="card-header">
            <h5 class="card-title">Edit Page</h5>
        </div>
        <div class="card-body">
            {{ Form::model($page, ['method' => 'PATCH', 'url' => route('pages.update', $page), 'files' => true, 'class' => 'col-md-7 col-lg-5', 'role' => 'form', 'autocomplete' => 'off']) }}
            {{-- tabs --}}
            @include('dashboard.page.form.tabs')

            {{-- content --}}
            <div class="tab-content" id="nav-tab-content">
                {{-- main-data tab --}}
                <div class="tab-pane fade active show" id="nav-main-data" role="tabpanel" aria-labelledby="nav-main-tab">
                    @include('dashboard.page.form.main-form-fields')
                    @include('dashboard.page.form.edit-btn')
                </div>

                {{-- meta-tags tab --}}
                <div class="tab-pane fade" id="nav-meta-tags" role="tabpanel" aria-labelledby="nav-meta-tab">
                    @include('dashboard.page.form.meta-form-fields')
                    @include('dashboard.page.form.edit-btn')
                </div>

                {{-- content tab --}}
                <div class="tab-pane fade" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab">
                    @include('dashboard.page.form.content-form-fields')
                    @include('dashboard.page.form.edit-btn')
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

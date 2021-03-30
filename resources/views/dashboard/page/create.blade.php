@extends('layouts.admin')

@section('title', 'Create Page')
@section('content')
    <div class="card card-margin">
        <div class="card-header">
            <h5 class="card-title">Create New Page</h5>
        </div>
        <div class="card-body">
            <nav>
                {{-- tabs --}}
                <div class="nav nav-tabs nav-tabs-line" id="nav-tab1" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home1" aria-selected="false">Main</a>
                    <a class="nav-item nav-link" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile1" aria-selected="false">tab</a>
                    <a class="nav-item nav-link" id="nav-contact-tab1" data-toggle="tab" href="#nav-contact1" role="tab" aria-controls="nav-contact1" aria-selected="true">tab</a>
                </div>
            </nav>
            {{-- content --}}
            <div class="tab-content" id="nav-tabContent1">
                <div class="tab-pane fade active show" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab1">
                    {{ Form::model($page, [
                        'url' => route('pages.store'),
                        'class' => 'col-md-7 col-lg-5',
                        'role' => 'form',
                        'autocomplete' => 'off'
                    ]) }}
                    
                    @include('dashboard.page.form')

                    <div class="card-footer bg-white">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                    {{ Form::close() }}
                </div>
                <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab1">Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco voluptate nisi commodo ea sit eu.</div>
                <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.</div>
            </div>
        </div>
    </div>
@endsection

@isset($boostSection)
    <div class="main-boost">
        @foreach ($boostSection as $item)
            <div class="item aos" data-aos="fade-up" data-aos-duration="1000">
                <div class="img">
                    {!! \App\Services\helpers\generateImage($item->image_name) !!}
                </div>
                <span>{{ $item->title }}</span>
                {!! $item->text !!}
            </div>
        @endforeach
    </div>
@endisset

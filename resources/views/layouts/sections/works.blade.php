<section class="default white__bg" id="our__works-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">Наши туры</div>
            </div>
        </div>
    </div>
</section>

<section class="excursions">
    <div class="container">
        @foreach($works as $work)
        <div class="row">
            <div class="col-6">
                <div class="body">
                    <div class="name">
                        {{ $work->name }}
                    </div>
                    <div class="text">
                        {!! $work->preview !!}
                    </div>
                    <div class="buttons">
                        <div class="btn order call__popup" data-excursion="{{ $work->name }}" data-target="popup__order">
                            Заказать тур
                        </div>
                        <div data-link="{{ route('work.show', ['id' => $work->id]) }}" class="btn view__detail-link">
                            Детали
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <div>
                        @if ($work->image)
                            <div class="rooms__slider-img">
                                <img src="{{ $work->image->path }}" alt="{{ $work->image->alt }}" title="{{ $work->image->title }}" />
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
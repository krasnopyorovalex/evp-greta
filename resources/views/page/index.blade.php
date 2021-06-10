@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')

    <main>

        @includeWhen(count($works), 'layouts.sections.works')

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {!! $page->text !!}
                    </div>
                </div>
            </div>
        </section>

        @includeWhen(count($abouts), 'layouts.sections.about')

        @includeWhen(count($faqs), 'layouts.sections.faqs')

        @includeWhen(count($guestbook), 'layouts.sections.guestbook')

        @includeWhen(count($actions), 'layouts.sections.actions')

        <section class="map__section" id="contacts__section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A60134e9a0f7a40871ee95d139cb0f6efb4d54141400b6e96aa52db44796f5deb&amp;source=constructor&amp;scroll=false" width="100%" height="490" frameborder="0"></iframe>
                    </div>
{{--                    <div class="col-4">--}}
{{--                        @include('layouts.forms.callback')--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
    </main>

@endsection

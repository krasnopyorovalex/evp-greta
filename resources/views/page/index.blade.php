@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')

    <main>

        @includeWhen(count($works), 'layouts.sections.works')

        <section id="main-text" class="section">
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

        @includeWhen($page->gallery, 'layouts.sections.gallery', ['gallery' => $page->gallery])

        <section class="map__section" id="contacts__section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac63127d10cde876d0d1e9f246661e1dcac11be61c3bde097c2785fb801dc9a28&amp;source=constructor&amp;scroll=false" width="100%" height="490" frameborder="0"></iframe>
                    </div>
{{--                    <div class="col-4">--}}
{{--                        @include('layouts.forms.callback')--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
    </main>

@endsection

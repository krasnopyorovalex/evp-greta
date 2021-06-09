@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {!! $page->text !!}
                    </div>
                </div>
            </div>
        </section>

        @includeWhen(count($works), 'layouts.sections.works')

        @includeWhen(count($abouts), 'layouts.sections.about')

        @includeWhen(count($faqs), 'layouts.sections.faqs')

        @includeWhen(count($guestbook), 'layouts.sections.guestbook')

        @includeWhen(count($actions), 'layouts.sections.actions')

        <section class="map__section" id="contacts__section">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad83036b86e49eab0fc169daacf929b5a150df6588251bc42a8a1161fce9e4f67&amp;source=constructor&amp;scroll=false" width="100%" height="490" frameborder="0"></iframe>
                    </div>
                    <div class="col-4">
                        @include('layouts.forms.callback')
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

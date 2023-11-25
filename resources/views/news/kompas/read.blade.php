<x-layouts.app>
    <section class="section read">
        <article class="article-wrap">
            <header class="article-header">
                <img src="{{ asset('images/kompas-logo.png') }}" alt="">
                <h1>Kompas</h1>
            </header>
            <div class="article-hero">
                {!! $image !!}
            </div>
            <main class="article-content">
                <div>
                    <h2>{{ $title }}</h2>
                    <h3>{{ $category }} | {{ $info }}</h3>
                </div>
                {!! $content !!}
            </main>
        </article>
    </section>
    <script src="{{ asset('asset/js/kompas-map.js') }}"></script>
</x-layouts.app>

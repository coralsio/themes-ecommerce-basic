@extends('layouts.public')

@section('editable_content')
    @php \Actions::do_action('pre_content',$item, $home??null) @endphp

    {!! $item->rendered !!}

    @include('partials.featured_categories')
    @include('partials.featured_products')
    @include('partials.three_column_lists')
    @include('partials.featured_brands')

    <section class="container padding-top-2x padding-bottom-2x">
        {!!   \Shortcode::compile( 'block','home-stores-features' ) ; !!}
        <div class="text-center">
            @php \Actions::do_action('pre_display_footer') @endphp
        </div>
    </section>

    @include('partials.news')

@stop

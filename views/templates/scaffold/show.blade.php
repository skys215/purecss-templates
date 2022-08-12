@@extends('layouts.app')

@@section('title')
    @if($config->options->localized)
        @@lang('models/{!! $config->modelNames->camelPlural !!}.singular') @@lang('crud.detail')
    @else
        {{ $config->modelNames->human }} Details
    @endif

    <a class="pure-button button-small button-secondary"
       href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural  !!}.index') }}">
        @if($config->options->localized)
            @@lang('crud.back')
        @else
            Back
        @endif
    </a>
@@endsection

@@section('content')
    @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.show_fields')
@@endsection

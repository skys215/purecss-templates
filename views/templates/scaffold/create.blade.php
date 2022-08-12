@@extends('layouts.app')

@@section('title')
    @if($config->options->localized)
        @@lang('crud.create') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
    @else
        Create {{ $config->modelNames->humanPlural }}
    @endif
@@endsection

@@section('content')
        @@include('purecss-templates::common.errors')
        
        @{!! Form::open(['route' => '{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.store', 'class' => 'pure-form pure-form-stacked']) !!}
                @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.fields')
        @{!! Form::submit('Save', ['class' => 'pure-button button-small button-success']) !!}

        <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="pure-button button-small button-secondary">@if($config->options->localized) @@lang('crud.cancel') @else Cancel @endif</a>

        @{!! Form::close() !!}
@@endsection

@@extends('layouts.app')

@@section('title')
    @if($config->options->localized)
        @@lang('crud.edit') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
    @else
        Edit {{ $config->modelNames->human }}
    @endif
@@endsection

@@section('content')
    @@include('purecss-templates::common.errors')

    @{!! Form::model(${{ $config->modelNames->camel }}, ['route' => ['{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.update', ${{ $config->modelNames->camel }}->{{ $config->primaryName }}], 'method' => 'patch', 'class' => 'pure-form pure-form-stacked']) !!}

    @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.fields')

    @{!! Form::submit('Save', ['class' => 'pure-button button-small button-success']) !!}
    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="pure-button button-small button-secondary">@if($config->options->localized) @@lang('crud.cancel') @else Cancel @endif</a>

    @{!! Form::close() !!}
@@endsection

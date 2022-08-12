<!-- {{ $fieldName }} Field -->
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
@endif
@{!! Form::password('{{ $fieldName }}', ['class' => 'pure-input-1'@php if(isset($options)) { echo htmlspecialchars_decode($options); } @endphp]) !!}
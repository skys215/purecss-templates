<!-- {{ $fieldTitle }} Field -->

@{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'pure-checkbox']) !!}
@{!! Form::checkbox('{{ $fieldName }}', '{{ $checkboxVal }}', null) !!}

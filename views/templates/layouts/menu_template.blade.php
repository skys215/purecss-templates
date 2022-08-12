<li class="pure-menu-item @{{ Request::is('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}*') ? ' pure-menu-selected' : '' }}">
    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="pure-menu-link">
        @if($config->options->localized)
            @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
        @else
            {{ $config->modelNames->humanPlural }}
        @endif  
    </a>
</li>

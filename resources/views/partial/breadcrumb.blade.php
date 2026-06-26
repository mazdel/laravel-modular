<div class="page-title-head d-flex align-items-center">
    @hasSection('breadcrumb')
        @php
            $_breadcrumb = collect(json_decode(trim($__env->yieldContent('breadcrumb')), true));
            $breadcrumb = $_breadcrumb->map(fn($item) => (object) $item);
        @endphp
        <div class="flex-grow-1">
            <h4 class="page-main-title m-0">
                {{ $breadcrumb->last()->title }}
            </h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                @foreach ($breadcrumb->toArray() as $crumb)
                    <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                        @if ($loop->last)
                            {{ $crumb->title }}
                        @else
                            <a href="{{ $crumb->link }}">{{ $crumb->title }}</a>
                        @endif
                    </li>
                @endforeach
            </ol>
        </div>
    @endif
</div>

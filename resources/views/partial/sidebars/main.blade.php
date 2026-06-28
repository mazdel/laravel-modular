@use('Illuminate\Support\Facades\File')
@use('Illuminate\Support\Str')
@use('App\Models\Menu')
@php
    $menu = Menu::where('parent', null)
        ->with(['children.children'])
        ->get();
@endphp
{{-- @dd($menu[3]->toArray()) --}}
<div class="sidenav-menu">
    <!-- Brand Logo -->
    <a class="logo"
        href="index.html">
        <span class="logo logo-light">
            <span class="logo-lg"><img alt="logo"
                    src="assets/images/logo.png" /></span>
            <span class="logo-sm"><img alt="small logo"
                    src="assets/images/logo-sm.png" /></span>
        </span>

        <span class="logo logo-dark">
            <span class="logo-lg"><img alt="dark logo"
                    src="assets/images/logo-black.png" /></span>
            <span class="logo-sm"><img alt="small logo"
                    src="assets/images/logo-sm.png" /></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-on-hover">
        <span class="btn-on-hover-icon"></span>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-offcanvas">
        <i class="ti ti-menu-4 align-middle"></i>
    </button>

    <div class="scrollbar"
        data-simplebar="">
        @include('partial.sidebars.account-navs')

        <!--- Sidenav Menu -->
        <div id="sidenav-menu">
            <ul class="side-nav">
                @foreach ($menu as $item)
                    @php
                        $key = Str::snake(Str::lower("{$item->label} {$loop->iteration}"));
                    @endphp
                    @if ($item->type == 'title')
                        <li class="side-nav-title mt-2">
                            {{ $item->label }}
                        </li>
                        @continue
                    @endif
                    <li class="side-nav-item">
                        <a @if ($item->children->isNotEmpty()) data-bs-toggle="collapse"
                            href="#{{ $key }}"
                            aria-controls="{{ $key }}"
                            aria-expanded="false"
                            @else
                            href="{{ $item->route ? route($item->route) : $item->href ?? '#' }}" @endif
                            class="side-nav-link {{ $item->aclass ?? '' }}">
                            @if ($item->icon)
                                <span class="menu-icon">
                                    <i class="{{ $item->icon }}"></i>
                                </span>
                            @endif
                            <span class="menu-text">{{ $item->label }}</span>
                            @if ($item->children->isNotEmpty() && !$item->badge)
                                <span class="menu-arrow"></span>
                            @endif
                            @if ($item->badge)
                                <span class="badge bg-danger text-white">
                                    {{ $item->badge }}
                                </span>
                            @endif
                        </a>
                        @if ($item->children->isNotEmpty())
                            <div class="collapse"
                                id="{{ $key }}">
                                <ul class="sub-menu">
                                    @foreach ($item->children as $subItem)
                                        @php
                                            $subKey = Str::snake(
                                                Str::lower("{$subItem->label} {$loop->iteration}"),
                                            );
                                        @endphp
                                        <li class="side-nav-item">
                                            <a @if ($subItem->children->isNotEmpty()) data-bs-toggle="collapse"
                                                href="#{{ $subKey }}"
                                                aria-controls="{{ $subKey }}"
                                                aria-expanded="false"
                                                @else
                                                href="{{ $subItem->route ? route($subItem->route) : $subItem->href ?? '#' }}" @endif
                                                class="side-nav-link {{ $subItem->aclass ?? '' }}">
                                                @if ($subItem->icon)
                                                    <span class="menu-icon">
                                                        <i class="{{ $subItem->icon }}"></i>
                                                    </span>
                                                @endif
                                                <span
                                                    class="menu-text">{{ $subItem->label }}</span>
                                                @if ($subItem->children->isNotEmpty() && !$subItem->badge)
                                                    <span class="menu-arrow"></span>
                                                @endif
                                                @if ($subItem->badge)
                                                    <span class="badge bg-danger text-white">
                                                        {{ $subItem->badge }}
                                                    </span>
                                                @endif
                                            </a>
                                            @if ($subItem->children->isNotEmpty())
                                                <div class="collapse"
                                                    id="{{ $subKey }}">
                                                    <ul class="sub-menu">
                                                        @foreach ($subItem->children as $subItem2)
                                                            @php
                                                                $subKey = Str::snake(
                                                                    Str::lower(
                                                                        "{$subItem2->label} {$loop->iteration}",
                                                                    ),
                                                                );
                                                            @endphp
                                                            <li class="side-nav-item">
                                                                <a class="side-nav-link {{ $subItem2->aclass ?? '' }}"
                                                                    href="{{ $subItem2->route ? route($subItem2->route) : $subItem2->href ?? '#' }}">
                                                                    <span class="menu-text">
                                                                        {{ $subItem2->label }}
                                                                    </span>
                                                                    @if ($subItem2->badge)
                                                                        <span
                                                                            class="badge bg-danger text-white">
                                                                            {{ $subItem2->badge }}
                                                                        </span>
                                                                    @endif
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
<script>
    $(async () => {
        console.log("DOM Content Loaded");
    });
</script>

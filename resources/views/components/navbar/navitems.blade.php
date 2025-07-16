@props([
    'items' => [],
])

<x-slot name="navitems">
    @foreach ($items as $firstLevelItem)
        {{ Debugbar::info($firstLevelItem) }}
        @if (isset($firstLevelItem['show']) && !$firstLevelItem['show'])
            @continue
        @endif

        @if (isset($firstLevelItem['items']))
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-title">{{ $firstLevelItem['label'] }}</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <!--end:Menu link-->

                <!--begin:Menu sub-->
                <div
                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                    @foreach ($firstLevelItem['items'] as $secondLevelItem)
                        {{ Debugbar::info($secondLevelItem) }}
                        @if (isset($secondLevelItem['items']))
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <iconify-icon icon="{{ $secondLevelItem['icon'] }}"
                                            class="fa-1-5"></iconify-icon>
                                    </span>
                                    <span class="menu-title">{{ $secondLevelItem['label'] }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->

                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    @foreach ($secondLevelItem['items'] as $thirdLevelItem)
                                        {{ Debugbar::info($thirdLevelItem) }}
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ $thirdLevelItem['href'] }}">
                                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                                <span class="menu-title">{{ $thirdLevelItem['label'] }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    @endforeach
                                </div>
                                <!--end:Menu sub-->
                            </div>
                        @else
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="{{ $secondLevelItem['href'] }}">
                                    <span class="menu-icon">
                                        <iconify-icon icon="{{ $secondLevelItem['icon'] }}"
                                            class="fa-1-5"></iconify-icon>
                                    </span>
                                    <span class="menu-title">{{ $secondLevelItem['label'] }}</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                        @endif
                    @endforeach

                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
        @else
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                class="menu-item {{ request()->is($firstLevelItem['href']) ? 'here' : '' }}">
                <!--begin:Menu link-->
                <a href="{{ $firstLevelItem['href'] }}" class="menu-link">
                    <span class="menu-title">{{ $firstLevelItem['label'] }}</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
        @endif
    @endforeach
</x-slot>


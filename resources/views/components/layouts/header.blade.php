<header id="header" class="band dark" aria-label="Site banner">

    <div id="skipnav"><a href="#main">Skip to main content</a></div>

    <div id="cu-search" class="cu-search closed">
        <div class="container">
            <form id="cu-search-form" tabindex="-1" role="search" action="https://www.cornell.edu/search/">
                <label for="cu-search-query" class="sr-only">Search:</label>
                <input type="text" id="cu-search-query" name="q" value="" size="30">
                <button id="cu-search-submit" type="submit"><span class="sr-only">Submit Search</span></button>

{{--                <fieldset class="search-filters" role="radiogroup">--}}
{{--                    <legend class="sr-only">Search Filters</legend>--}}
{{--                    <input type="radio" id="cu-search-filter1" name="sitesearch" value="thissite" checked="checked">--}}
{{--                    <label for="cu-search-filter1"><span class="sr-only">Search </span>This Site</label>--}}
{{--                    <input type="radio" id="cu-search-filter2" name="sitesearch" value="cornell">--}}
{{--                    <label for="cu-search-filter2"><span class="sr-only">Search </span>Cornell</label>--}}
{{--                </fieldset>--}}
            </form>
        </div>
    </div>

    <div id="cu-header" class="cu-header">

        <div class="navbar navbar-logo nav-right dark red fill">
            <div class="container">
{{--                <div class="logo">--}}
{{--                    <a href="https://www.cornell.edu"><img src="{{ asset('cds/images/cornell/cornell_reduced_white_41.svg') }}" alt="Cornell University" width="183" height="41"></a>--}}
{{--                </div>--}}
                <!-- Utility Navigation.  Refer to cornellcustomdev.github.io/cds-docs/patterns/utility_navigation.md for details -->
            </div>
        </div>

        <div class="container padded">
            <div class="content brand">
                <div class="buttons">
                    <button class="mobile-button" id="cu-search-button">Toggle Search Form</button>
                    <button class="mobile-button" id="mobile-nav">Main Menu</button>
                </div>
                <div class="site-logo">
                    <a href="https://www.cornell.edu"><img src="{{ asset('cds/images/cornell/legacy/bold_cornell_seal_simple_white.svg') }}" alt="Cornell University" width="100" height="100"></a>
                </div>
                <div class="site-branding">
                    <p class="site-title serif">{{ $title }}</p>
                    <p class="site-subtitle">{{ $subtitle }}</p>
                </div>
            </div>
        </div>

        <x-layouts.main-nav/>
    </div>
</header>

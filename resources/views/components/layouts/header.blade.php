<header id="header" class="band tint" aria-label="Site banner">

    <div id="skipnav"><a href="#main">Skip to main content</a></div>

    <div id="cu-search" class="cu-search dark closed">
        <div class="container">
            <form id="cu-search-form" tabindex="-1" role="search" action="https://www.cornell.edu/search/">
                <label for="cu-search-query" class="sr-only">Search:</label>
                <input type="text" id="cu-search-query" name="q" value="" size="30">
                <button name="btnG" id="cu-search-submit" type="submit" value="go"><span class="sr-only">Submit Search</span></button>

                <fieldset class="search-filters" role="radiogroup">
                    <legend class="sr-only">Search Filters</legend>
                    <input type="radio" id="cu-search-filter1" name="sitesearch" value="thissite" checked="checked">
                    <label for="cu-search-filter1"><span class="sr-only">Search </span>This Site</label>
                    <input type="radio" id="cu-search-filter2" name="sitesearch" value="cornell">
                    <label for="cu-search-filter2"><span class="sr-only">Search </span>Cornell</label>
                </fieldset>
            </form>
        </div>
    </div>

    <div id="cu-header" class="cu-header">

			<div class="container padded">
				<div class="content brand logo-right">
					<div class="buttons">
						<button class="mobile-button" id="cu-search-button">Toggle Search Form</button>
						<button class="mobile-button" id="mobile-nav">Main Menu</button>
					</div>

					<div class="site-logo">
						<a href="https://www.cornell.edu"><img src="cds/images/cornell/cornell_seal_simple_web_b31b1b.svg" alt="Cornell University" width="100" height="100"></a>
					</div>
					<div class="site-branding">
						<h2>
							<a href="https://fcs.cornell.edu">
								<span class="accent">Facilities</span>
								<small>and</small><br>
								<span>Campus Services</span>
							</a>
						</h2>
					</div>
				</div>
			</div>

			<x-layouts.main-nav/>

		</div>
</header>



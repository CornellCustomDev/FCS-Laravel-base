<x-layouts.app title="CD Laravel Base" subtitle="Custom Development">
    <article id="main-article">

        <!-- Default main article region with sidebar -->
        <div class="region region-sidebar sidebar-left sidebar-tint">
            <div class="container">
                <div class="layout">
                    <div class="sidebar sidebar-primary">
                        <h2>Priority Sidebar Content</h2>
                        <p>This region of the sidebar is first in the DOM order, and will appear <strong>above article content</strong> in the single-column mobile layout.</p>
                    </div>
                    <div class="article">
                        <h1 id="content" tabindex="-1">Article with Sidebar</h1> <!-- This page title should always appear somewhere in the page layout, to act as a universal skip-to-content target. -->
                        <p class="intro">This is the <code>.intro</code> paragraph style, used to give extra impact to an opening sentence or two. It can serve as a tagline or short prompt for the content that follows.</p>
                        <p>Welcome to the <a href="https://it.cornell.edu/custom-web">Custom Development</a> Cornell Design System (CDS). Below, you'll find a collection of sample content to demonstrate default layout, styling, and functionality. This same content can be used to test your custom designs, and to provide a reference for content contributors. You'll also find a few tips and guidelines along the way.</p>
                        <p>This welcome section appears within an "Article with Sidebar" region (<code>.region-sidebar</code>), which represents a traditional web page layout. On desktop, the sidebar appears as a single column. However, it is comprised of two sections, which will "split" on mobile, allowing for important content (such as navigation or filters) to appear above the main article, and secondary content to appear below. The desktop sidebar can appear either on the left or right (<code>.sidebar-left</code> or <code>.sidebar-right</code>), and can be tinted to the screen edge with <code>.sidebar-tint</code>.</p>
                        <p>Below are examples of other basic region and layout options, followed by a general styleguide.</p>
                    </div>
                    <div class="sidebar sidebar-secondary">
                        <h2>Secondary Sidebar Content</h2>
                        <p>This region of the sidebar is last in the DOM order, and will appear <strong>below article content</strong> in the single-column mobile layout.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->

        <div class="region padded dark gray">
            <div class="container">
                <div class="section">
                    <h2>Dark Full-Width Block with Standard Container</h2>
                    <p class="intro">At maximum size on desktop screens, the width of content in the standard container (<code>.container</code>) is <code>1320px</code>.</p>
                    <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                </div>
            </div>
        </div>

        <div class="region padded-medium dark gray tint">
            <div class="container">
                <div class="layout">
                    <div class="section">
                        <h2>Region Color Variant</h2>
                        <p>Each major background color has a slightly darker variant, activated by including the <code>.tint</code> class.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="region padded">
            <div class="container container-full">
                <div class="section">
                    <h2>Full-Width Block with Full-Width Container</h2>
                    <p class="intro">The full-width container (<code>.container.container-full</code>) has no maximum width, but still maintains appropriate side gutters at all sizes.</p>
                    <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                </div>
            </div>
        </div>

        <div class="region padded-medium tint">
            <div class="container container-full">
                <div class="layout">
                    <div class="section">
                        <h2>Region Color Variant</h2>
                        <p>Each major background color has a slightly darker variant, activated by including the <code>.tint</code> class.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="region padded dark navy">
            <div class="container">
                <div class="layout layout-1-1">
                    <div class="section">
                        <h2>Navy Two-Column</h2>
                        <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                    </div>
                    <div class="section">
                        <h2>Two-Column</h2>
                        <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="region padded-medium dark navy tint">
            <div class="container">
                <div class="layout">
                    <div class="section">
                        <h2>Region Color Variant</h2>
                        <p>Each major background color has a slightly darker variant, activated by including the <code>.tint</code> class.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="region padded">
            <div class="container">
                <div class="layout layout-1-1-1">
                    <div class="section">
                        <h2>Three-Column</h2>
                        <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                    </div>
                    <div class="section">
                        <h2>Three-Column</h2>
                        <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                    </div>
                    <div class="section">
                        <h2>Three-Column</h2>
                        <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="region padded dark red">
            <div class="container container-full">
                <div class="layout layout-1-1-1-1">
                    <div class="section">
                        <h2>Red Four-Column</h2>
                        <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                    </div>
                    <div class="section">
                        <h2>Four-Column</h2>
                        <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                    </div>
                    <div class="section">
                        <h2>Four-Column</h2>
                        <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                    </div>
                    <div class="section">
                        <h2>Four-Column</h2>
                        <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="region padded-medium dark red tint">
            <div class="container container-full">
                <div class="layout">
                    <div class="section">
                        <h2>Region Color Variant</h2>
                        <p>Each major background color has a slightly darker variant, activated by including the <code>.tint</code> class.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="region padded demo-mode">
            <div class="container full-margin-all">
                <h2 class="text-center">Even Columns</h2>

                <div class="layout layout-1-1">
                    <div class="section">
                        <h3>50% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>50% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <p class="fade">Surplus section divs will appear as additional rows.</p>
                    </div>
                    <div class="section">
                        <p class="fade">These rows will have the same proportions.</p>
                    </div>
                </div>

                <div class="layout layout-1-1-1">
                    <div class="section">
                        <h3>~33% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>~33% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>~33% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-1-1-1-1">
                    <div class="section">
                        <h3>~25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>~25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>~25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>~25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <hr class="invisible">

                <h2 class="text-center">Proportions</h2>

                <div class="layout layout-1-2">
                    <div class="section">
                        <h3>~33% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>~66% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-2-1">
                    <div class="section">
                        <h3>~66% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>~33% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-2-3">
                    <div class="section">
                        <h3>40% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>60% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-3-2">
                    <div class="section">
                        <h3>60% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>40% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-1-3">
                    <div class="section">
                        <h3>25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>75% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-3-1">
                    <div class="section">
                        <h3>75% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-1-4">
                    <div class="section">
                        <h3>20% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>80% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-4-1">
                    <div class="section">
                        <h3>80% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>20% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-2-1-1">
                    <div class="section">
                        <h3>50% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-1-2-1">
                    <div class="section">
                        <h3>25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>50% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

                <div class="layout layout-1-1-2">
                    <div class="section">
                        <h3>25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>25% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        <h3>50% Column</h3>
                        <p>Welcome to the Cornell CSS Framework.</p>
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                    <div class="section">
                        &nbsp;
                    </div>
                </div>

            </div>
        </div>

        <div class="region padded dark gray">
            <div class="container">
                <h2>And for more control, <code>.flex-grid</code> is also an option:</h2>
                <div class="flex-grid demo-mode collapse-rows padded">
                    <div class="flex-2">
                        <p>.flex-2</p>
                    </div>
                    <div class="flex-7">
                        <p>.flex-7</p>
                    </div>
                    <div class="flex-3">
                        <p>.flex-3</p>
                    </div>

                    <div class="flex-5">
                        <p>.flex-5</p>
                    </div>
                    <div class="flex-1">
                        <p>.flex-1</p>
                    </div>
                    <div class="flex-1">
                        <p>.flex-1</p>
                    </div>
                    <div class="flex-1">
                        <p>.flex-1</p>
                    </div>
                    <div class="flex-4">
                        <p>.flex-4</p>
                    </div>

                    <div class="flex-1-5">
                        <p>.flex-1-5</p>
                    </div>
                    <div class="flex-1-5">
                        <p>.flex-1-5</p>
                    </div>
                    <div class="flex-1-5">
                        <p>.flex-1-5</p>
                    </div>
                    <div class="flex-1-5">
                        <p>.flex-1-5</p>
                    </div>
                    <div class="flex-1-5">
                        <p>.flex-1-5</p>
                    </div>

                    <div class="flex-1-8">
                        <p>.flex-1-8</p>
                    </div>
                    <div class="flex-1-8">
                        <p>.flex-1-8</p>
                    </div>
                    <div class="flex-1-8">
                        <p>.flex-1-8</p>
                    </div>
                    <div class="flex-1-8">
                        <p>.flex-1-8</p>
                    </div>
                    <div class="flex-1-8">
                        <p>.flex-1-8</p>
                    </div>
                    <div class="flex-1-8">
                        <p>.flex-1-8</p>
                    </div>
                    <div class="flex-1-8">
                        <p>.flex-1-8</p>
                    </div>
                    <div class="flex-1-8">
                        <p>.flex-1-8</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="region region-sidebar sidebar-right sidebar-tint">
            <div class="container">
                <div class="layout">

                    <div class="sidebar sidebar-priority">
                        <h2>Priority Sidebar Content</h2>
                        <p>This region of the sidebar is first in the DOM order, and will appear <strong>above article content</strong> in the single-column mobile layout.</p>
                        <h3>Basic Vertical Navbars</h3>
                        <nav aria-label="Vertical Navigation" class="navbar vertical">
                            <ul>
                                <li><a href="#">Nav Item 1</a></li>
                                <li><a href="#">Nav Item 2</a></li>
                                <li><a href="#">Nav Item 3</a></li>
                                <li><a href="#">Nav Item 4</a></li>
                                <li><a href="#">Nav Item 5</a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Vertical Navigation with Red Accent" class="navbar vertical accent-red">
                            <ul>
                                <li><a href="#">Red Accent</a></li>
                                <li><a href="#">Red Accent</a></li>
                                <li><a href="#">Red Accent</a></li>
                                <li><a href="#">Red Accent</a></li>
                                <li><a href="#">Red Accent</a></li>
                            </ul>
                        </nav>

                        <hr class="invisible">

                        <h2 class="menu-block-title"><a href="#" class="menu-item--active-trail">Drupal Menu</a></h2>
                        <nav class="secondary-navigation mobile-expander animate slide-down" aria-label="Drupal Section Navigation">
                            <ul class="menu">
                                <li class="menu-item"><a href="#" data-drupal-link-system-path="node/63">Research Home</a></li>
                                <li class="menu-item menu-item--expanded menu-item--active-trail parent"><a href="#" class="is-active">Beam Acceleration</a>
                                    <ul class="menu">
                                        <li class="menu-item"><a href="#" data-drupal-link-system-path="node/300">Beam Acceleration Objectives and Deliverables</a></li>
                                        <li class="menu-item"><a href="#" data-drupal-link-system-path="node/367">Beam Acceleration Team and Projects</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item--collapsed"><a href="#">Beam Dynamics and Control</a></li>
                                <li class="menu-item"><a href="#">Research Ecosystem</a></li>
                                <li class="menu-item"><a href="#">Research Highlights</a></li>
                            </ul>
                        </nav>

                        <h2 class="menu-block-title"><a href="#" class="current_page_ancestor current_page_parent">WordPress Menu</a></h2>
                        <nav class="secondary-navigation mobile-expander animate slide-down" aria-label="Wordpress Section Navigation">
                            <ul class="menu">
                                <li class="page_item"><a href="#">Public Policy At Cornell</a></li>
                                <li class="page_item"><a href="#">How to Apply</a></li>
                                <li class="page_item page_item_has_children current_page_item"><a href="#" aria-current="page">Program of Study</a>
                                    <ul class="children">
                                        <li class="page_item"><a href="#">Areas of Specialty</a></li>
                                        <li class="page_item"><a href="#">Who's Who in the PhD Program</a></li>
                                        <li class="page_item"><a href="#">Graduate Field Faculty</a></li>
                                    </ul>
                                </li>
                                <li class="page_item"><a href="#">Costs and Aid</a></li>
                                <li class="page_item"><a href="#">Our Students</a></li>
                                <li class="page_item"><a href="#">Connect</a></li>
                            </ul>
                        </nav>

                        <nav class="secondary-navigation mobile-expander animate slide-down" aria-label="Classic Section Navigation">
                            <ul class="menu">
                                <li class="current-menu-ancestor current-menu-parent"><a href="#">Classic Menu (No Block Title)</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">Cornell Resources</a></li>
                                        <li class="menu-item current-menu-item"><a href="#">Big Red Barn</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="#">Signature Events</a></li>
                                                <li class="menu-item"><a href="#">Hours and Dining</a></li>
                                                <li class="menu-item"><a href="#">Reservations</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#">Living in Ithaca</a></li>
                                        <li class="menu-item"><a href="#">Office of Student Life</a></li>
                                        <li class="menu-item"><a href="#">Help and Support</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="article">

                        <!-- <div id="breadcrumb-navigation"> -->
                        <nav class="breadcrumb" aria-label="Breadcrumb">
                            <ul class="small">
                                <li><a href="#"><span class="-limiter">Home</span></a></li>
                                <li><a href="#"><span class="-limiter">Section Page</span></a></li>
                                <li><a href="#"><span class="-limiter">Subsection Page</span></a></li>
                                <li>Optional Current Page</li>
                                <!-- <li><a href="#"><span class="-limiter">This Page Has An Especially Long Title Which Will Be Truncated With Ellipses</span></a></li> -->
                                <!-- <li><span class="-limiter">Current Page Has An Especially Long Title Which Will Be Truncated With Ellipses</span></li> -->
                            </ul>
                        </nav>
                        <!-- </div> -->

                        <h1>Styleguide (Heading 1)</h1>
                        <p class="intro">This is the <code>.intro</code> paragraph style, used to give extra impact to an opening sentence or two. It can serve as a tagline or short prompt for the content that follows.</p>
                        <p>A standard paragraph ranges from <code>16px</code> (on mobile) to <code>18px</code> (on desktop). This size is suited to the scale of modern fonts like Cornell's <em>Freight Sans Pro</em>. The <code>.small</code> or <code>.large</code> classes can be used to reduce or increase this responsive text size for a container or individual element. The <code>.mini</code> option is very small, and remains the same size at all viewport sizes.</p>

                        <div class="two-col">
                            <div class="blockquote half-margin-all">
                                <p class="large no-line-height">Large Text (<code>18px</code> to <code>24px</code>)</p>
                                <p class="">Medium (Default) (<code>16px</code> to <code>18px</code>)</p>
                                <p class="small">Small Text Size (<code>15px</code> to <code>16px</code>)</p>
                                <p class="mini">Mini Text Size (<code>14px</code>)</p>
                            </div>
                            <div class="blockquote half-margin-all serif">
                                <p class="large no-line-height">Large Serif Text</p>
                                <p class="">Medium Serif Text</p>
                                <p class="small">Small Serif Text Size</p>
                                <p class="mini">Mini Serif Text Size</p>
                            </div>
                        </div>

                        <h2>Light and Dark Regions <small><code>.dark</code></small></h2>
                        <p>The CDS has a built-in system of light and dark regions, with content adapting to the background of its container. "Light" is the default appearance, with black text displayed typically over pure white or a light tint of gray. A "dark" region is activated by applying the <code>.dark</code> class, which automatically switches to a light over dark aesthetic, and retains contrast in other subtle ways.</p>
                        <h3>Text Contrast</h3>
                        <p class="soft quarter-margin">Soft text (<code>.soft</code>) is slightly muted from default black.</p>
                        <p class="dim">Dim text (<code>.dim</code>) is faded further, but still provides suitable contrast over white and light gray.</p>
                        <aside class="dark fill no-margin no-border">
                            <p>In dark mode, <span class="soft">soft text</span> and <span class="dim">dim text</span> are both slightly muted from default off-white and <a href="#">pure white links</a>.</p>
                        </aside>
                        <aside class="dark navy no-margin no-border">
                            <p>In dark mode, <span class="soft">soft text</span> and <span class="dim">dim text</span> are both slightly muted from default off-white and <a href="#">pure white links</a>.</p>
                        </aside>
                        <aside class="dark red no-border">
                            <p>In dark mode, <span class="soft">soft text</span> and <span class="dim">dim text</span> are both slightly muted from default off-white and <a href="#">pure white links</a>.</p>
                        </aside>

                        <h2>Links and Buttons (and Link Buttons!)</h2>
                        <h3>Basic Links</h3>
                        <p>Basic links will use Cornell's <a href="https://brand.cornell.edu/design-center/colors/#accents">accent blue</a> by default, though it's not uncommon to build a section or full design around <a class="red" href="https://brand.cornell.edu/design-center/colors/#primary">primary red</a> links instead. The <code>.red</code> class can be applied to a link to choose red directly. Alternatively, <code>.red-links</code> can be applied to a container, which will apply to all links within. Visited links are not distinguished visually by default.</p>
                        <aside class="dark navy">Basic links in a <code>.dark</code> region will display as <a href="#">pure white</a> with a subtle fade to <code>text-decoration</code>.</aside>
                        <h3>Buttons Galore</h3>
                        <p>The button options below can be mixed and matched (color, size, "classic" look, etc...) and should also be compatible with "Link Buttons" (links presenting as buttons via the <code>.link-button</code> class). Not all variations are shown, and some combinations may not be fully effective (e.g, a border won't be visible over pure black, but may be faintly visible during its active state). Be careful with bordered white and light gray, as these may come to resemble the appearance of a text field. A shadow is applied to the pure white buttons below to make their boundaries visible over the white background.</p>

                        <aside>
                            <p class="half-margin"><span class="bear">Big Red Bear</span> in mind... There is only a minimal difference between <strong>default</strong> (no size class) and <strong>small</strong> (<code>.small</code>) buttons that appear within a <code>&lt;form&gt;</code> tag, since forms are standardized to <code>16px</code>, preventing default buttons from getting any larger. This is generally desirable, to keep buttons matching other form elements (such as text inputs and select menus).</p>
                            <p>However, in the example below, the <code>medium</code> class has been applied to override this and fully demonstrate native text sizes.</p>
                        </aside>

                        <p>
                        <form class="half-margin-all medium">
                            <button>Default (Medium)</button>
                            <button class="red">Red</button>
                            <button class="light-red">Light Red</button>
                            <button class="navy">Navy</button>
                            <button class="green">Green</button>
                            <button class="black">Black</button>
                            <button class="dark-gray">Dark Gray</button>
                            <button class="gray">Gray</button>
                            <button class="medium-gray">Medium Gray</button>
                            <button class="light-gray">Light Gray</button>
                            <button class="white shadow">White</button>
                            <a href="#" class="link-button">Link Button</a>
                            <button class="curved">Curved</button>
                            <button class="round">Round</button>
                            <button class="bordered">Bordered</button>
                            <button class="red bordered">Bordered Red</button>
                            <button class="black bordered">Bordered Black</button>
                            <button class="light-gray bordered">Bordered Light Gray</button>
                            <button class="white bordered">Bordered White</button>
                            <button class="classic">Classic</button>
                            <button class="red classic">Classic Red</button>
                            <button class="light-gray classic">Classic Light Gray</button>
                            <button class="white classic">Classic White</button>
                            <button class="white classic curved">Classic Curved</button>
                            <button class="white classic round">Classic Round</button>
                        </form>
                        </p>

                        <p>
                        <form class="half-margin-all small">
                            <button>Small</button>
                            <button class="red">Red</button>
                            <button class="light-red">Light Red</button>
                            <button class="navy">Navy</button>
                            <button class="green">Green</button>
                            <button class="black">Black</button>
                            <button class="dark-gray">Dark Gray</button>
                            <button class="gray">Gray</button>
                            <button class="medium-gray">Medium Gray</button>
                            <button class="light-gray">Light Gray</button>
                            <button class="white shadow">White</button>
                            <a href="#" class="link-button">Link Button</a>
                            <button class="curved">Curved</button>
                            <button class="round">Round</button>
                            <button class="bordered">Bordered</button>
                            <button class="red bordered">Bordered Red</button>
                            <button class="black bordered">Bordered Black</button>
                            <button class="light-gray bordered">Bordered Light Gray</button>
                            <button class="white bordered">Bordered White</button>
                            <button class="classic">Classic</button>
                            <button class="red classic">Classic Red</button>
                            <button class="light-gray classic">Classic Light Gray</button>
                            <button class="white classic">Classic White</button>
                            <button class="white classic curved">Classic Curved</button>
                            <button class="white classic round">Classic Round</button>
                        </form>
                        </p>

                        <p>
                        <form class="half-margin-all mini">
                            <button>Mini</button>
                            <button class="red">Red</button>
                            <button class="light-red">Light Red</button>
                            <button class="navy">Navy</button>
                            <button class="green">Green</button>
                            <button class="black">Black</button>
                            <button class="dark-gray">Dark Gray</button>
                            <button class="gray">Gray</button>
                            <button class="medium-gray">Medium Gray</button>
                            <button class="light-gray">Light Gray</button>
                            <button class="white shadow">White</button>
                            <a href="#" class="link-button">Link Button</a>
                            <button class="curved">Curved</button>
                            <button class="round">Round</button>
                            <button class="bordered">Bordered</button>
                            <button class="red bordered">Bordered Red</button>
                            <button class="black bordered">Bordered Black</button>
                            <button class="light-gray bordered">Bordered Light Gray</button>
                            <button class="white bordered">Bordered White</button>
                            <button class="classic">Classic</button>
                            <button class="red classic">Classic Red</button>
                            <button class="light-gray classic">Classic Light Gray</button>
                            <button class="white classic">Classic White</button>
                            <button class="white classic curved">Classic Curved</button>
                            <button class="white classic round">Classic Round</button>
                        </form>
                        </p>

                        <p>
                        <form class="half-margin-all large">
                            <button>Large</button>
                            <button class="red">Red</button>
                            <button class="light-red">Light Red</button>
                            <button class="navy">Navy</button>
                            <button class="green">Green</button>
                            <button class="black">Black</button>
                            <button class="dark-gray">Dark Gray</button>
                            <button class="gray">Gray</button>
                            <button class="medium-gray">Medium Gray</button>
                            <button class="light-gray">Light Gray</button>
                            <button class="white shadow">White</button>
                            <a href="#" class="link-button">Link Button</a>
                            <button class="curved">Curved</button>
                            <button class="round">Round</button>
                            <button class="bordered">Bordered</button>
                            <button class="red bordered">Bordered Red</button>
                            <button class="black bordered">Bordered Black</button>
                            <button class="light-gray bordered">Bordered Light Gray</button>
                            <button class="white bordered">Bordered White</button>
                            <button class="classic">Classic</button>
                            <button class="red classic">Classic Red</button>
                            <button class="light-gray classic">Classic Light Gray</button>
                            <button class="white classic">Classic White</button>
                            <button class="white classic curved">Classic Curved</button>
                            <button class="white classic round">Classic Round</button>
                        </form>
                        </p>

                        <p>If an icon span is present (<code>.icon</code>, <code>.fa</code>, or <code>.zmdi</code>), it will inherit the text color of the button with slightly reduced opacity. It will also be positioned with margins suited to an icon on the left of the text. Due to limitations of CSS, we cannot automatically detect when the icon is instead to the right of the text. However, if the text is wrapped in its own <code>&lt;span&gt;</code> tag, to act as a sibling of the icon, CSS can then detect this and adjust the icon margins to suit an icon on the right. Some examples are below.</p>

                        <p>
                        <form class="half-margin-all small">
                            <button><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="red"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="light-red"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="navy"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="green"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="black"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="dark-gray"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="gray"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="medium-gray"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="light-gray"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="white shadow"><span class="zmdi zmdi-cake"></span>Material</button>
                            <a href="#" class="link-button"><span class="zmdi zmdi-cake"></span>Link Button</a>
                            <button class="curved"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="round"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="bordered"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="red bordered"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="black bordered"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="light-gray bordered"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="white bordered"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="classic"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="red classic"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="light-gray classic"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="white classic"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="white classic curved"><span class="zmdi zmdi-cake"></span>Material</button>
                            <button class="white classic round"><span class="zmdi zmdi-cake"></span>Material</button>
                        </form>
                        </p>

                        <p>
                        <form class="half-margin-all small">
                            <button><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="red"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="light-red"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="navy"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="green"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="black"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="dark-gray"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="gray"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="medium-gray"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="light-gray"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="white shadow"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <a href="#" class="link-button"><span class="fa fa-birthday-cake"></span>Link Button</a>
                            <button class="curved"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="round"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="bordered"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="red bordered"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="black bordered"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="light-gray bordered"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="white bordered"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="classic"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="red classic"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="light-gray classic"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="white classic"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="white classic curved"><span class="fa fa-birthday-cake"></span>Awesome</button>
                            <button class="white classic round"><span class="fa fa-birthday-cake"></span>Awesome</button>
                        </form>
                        </p>

                        <p>
                        <form class="half-margin-all">
                            <button class="large"><span class="fa fa-birthday-cake"></span>FontAwesome</button>
                            <button class="large"><span class="zmdi zmdi-cake"></span>Material Design</button>
                            <button><span class="fa fa-birthday-cake"></span>FontAwesome</button>
                            <button><span class="zmdi zmdi-cake"></span>Material Design</button>
                        </form>
                        </p>

                        <p>
                        <form class="half-margin-all">
                            <button class="small"><span>FA Right</span><span class="fa fa-angle-right"></span></button>
                            <button class="red"><span>FA Right</span><span class="fa fa-angle-right"></span></button>
                            <button class="classic white large"><span>FA Right</span><span class="fa fa-angle-right"></span></button>
                            <button class="small"><span>MD Right</span><span class="zmdi zmdi-arrow-right"></span></button>
                            <button class="red"><span>MD Right</span><span class="zmdi zmdi-arrow-right"></span></button>
                            <button class="classic white large"><span>MD Right</span><span class="zmdi zmdi-arrow-right"></span></button>
                        </form>
                        </p>

                        <p>We have taken to heart the revolutionary spirit that founded our university and encourage each other to pursue unpredicted lines of thinking in order to effect change on local and international scales.</p>

                        <section aria-label="Scripted Goodies">
                            <h2>Tablists <small><code>.ui-tabs</code></small></h2>

                            <div class="ui-tabs tabs-navbar">
                                <h3>Navbar <small><code><span class="fade-bw">.ui-tabs</span>.tabs-navbar</code></small></h3>
                                <div role="tablist" aria-label="Show Subscriptions" class="large">
                                    <div class="container">
                                        <button class="button" role="tab" aria-selected="true" aria-controls="panel-all-subscriptions" id="tab-all-subscriptions" tabindex="0">Tab Button 1</button>
                                        <button class="button" role="tab" aria-selected="false" aria-controls="panel-my-subscriptions" id="tab-my-subscriptions" tabindex="-1">Tab Button 2</button>
                                    </div>
                                </div>
                                <div id="panel-all-subscriptions" role="tabpanel" tabindex="0" aria-labelledby="tab-all-subscriptions">
                                    <h4>Knowledge for the Greater Good</h4>
                                    <p>We have taken to heart the revolutionary spirit that founded our university and encourage each other to pursue unpredicted lines of thinking in order to effect change on local and international scales.</p>
                                </div>
                                <div id="panel-my-subscriptions" role="tabpanel" tabindex="0" aria-labelledby="tab-my-subscriptions" hidden="hidden">
                                    <h4>Our Profile</h4>
                                    <p>As the federal land-grant institution in New York State, we have a responsibility—unique within the Ivy League—to make contributions in all fields of knowledge in a manner that prioritizes public engagement.</p>
                                </div>
                            </div>

                            <div class="ui-tabs tabs-navbar lined-bottom">
                                <h3>Navbar with Lined Bottom <small><code><span class="fade-bw">.ui-tabs.tabs-navbar</span>.lined-bottom</code></small></h3>
                                <div role="tablist" aria-label="Show Subscriptions" class="large">
                                    <div class="container">
                                        <button class="button" role="tab" aria-selected="true" aria-controls="panel-all-subscriptions2" id="tab-all-subscriptions2" tabindex="0">Tab Button 1</button>
                                        <button class="button" role="tab" aria-selected="false" aria-controls="panel-my-subscriptions2" id="tab-my-subscriptions2" tabindex="-1">Tab Button 2</button>
                                    </div>
                                </div>
                                <div id="panel-all-subscriptions2" role="tabpanel" tabindex="0" aria-labelledby="tab-all-subscriptions2">
                                    <h4>Knowledge for the Greater Good</h4>
                                    <p>We have taken to heart the revolutionary spirit that founded our university and encourage each other to pursue unpredicted lines of thinking in order to effect change on local and international scales.</p>
                                </div>
                                <div id="panel-my-subscriptions2" role="tabpanel" tabindex="0" aria-labelledby="tab-my-subscriptions2" hidden="hidden">
                                    <h4>Our Profile</h4>
                                    <p>As the federal land-grant institution in New York State, we have a responsibility—unique within the Ivy League—to make contributions in all fields of knowledge in a manner that prioritizes public engagement.</p>
                                </div>
                            </div>

                            <div class="ui-tabs tabs-classic">
                                <h3>Classic <small><code><span class="fade-bw">.ui-tabs</span>.tabs-classic</code></small> <mark class="text-highlight-yellow">NYI</mark></h3>
                                <div role="tablist" aria-label="Show Subscriptions">
                                    <div class="container">
                                        <button class="button" role="tab" aria-selected="true" aria-controls="panel-all-subscriptions3" id="tab-all-subscriptions3" tabindex="0">Tab Button 1</button>
                                        <button class="button" role="tab" aria-selected="false" aria-controls="panel-my-subscriptions3" id="tab-my-subscriptions3" tabindex="-1">Tab Button 2</button>
                                    </div>
                                </div>
                                <div id="panel-all-subscriptions3" role="tabpanel" tabindex="0" aria-labelledby="tab-all-subscriptions3">
                                    <h4>Knowledge for the Greater Good</h4>
                                    <p>We have taken to heart the revolutionary spirit that founded our university and encourage each other to pursue unpredicted lines of thinking in order to effect change on local and international scales.</p>
                                </div>
                                <div id="panel-my-subscriptions3" role="tabpanel" tabindex="0" aria-labelledby="tab-my-subscriptions3" hidden="hidden">
                                    <h4>Our Profile</h4>
                                    <p>As the federal land-grant institution in New York State, we have a responsibility—unique within the Ivy League—to make contributions in all fields of knowledge in a manner that prioritizes public engagement.</p>
                                </div>
                            </div>

                            <h2>Accordions <small>(<code>&lt;details&gt;</code>)</small></h2>

                            <p>An optional <code>.animate</code> class can be included on a <em>direct child</em> container of the <code>&lt;details&gt;</code> tag. This container will fade in when opened. If the class <code>.slide-down</code> is also included, the animation will include a subtle sliding effect. The slide-down option is used in the Expanding Menu examples below.</p>

                            <p>Wrapping multiple <code>&lt;details&gt;</code> tags in an <code>.accordion-set</code> container will cause JavaScript to generate an "expand all" button for this set of accordions. <s>When opening all accordions with this button, any animations will be omitted.</s></p>

                            <p>Multiple <code>&lt;details&gt;</code> tags that share a <code>name</code> attribute will act as a single-select group (only one accordion in the group can be open at a time, with others closing automatically if a new one is opened).</p>
                            <ul class="custom nerd">
                                <li>While this behavior is part of the <code>&lt;details&gt;</code> tag specification, it is fairly new as of 2024, and may not yet be supported natively by all browsers. To ensure consistent functionality on all browsers, it has been implemented with custom JavaScript instead.</li>
                                <li>Single-select groups are fundamentally compatible with "expand all" functionality, but it is recommended that you only use this combination with caution, as the UX may be a bit at odds with itself. Depending on the accordion style chosen, it may also be worth considering whether animated reveals are helpful or a hinderance to the visual communication of single-select behavior.</li>
                            </ul>

                            <h3>Default Style</h3>
                            <div class="accordion-set">
                                <details>
                                    <summary>Big Red Bear's Dining Picks</summary>
                                    <div class="details-content small animate">
                                        <p class="quarter-margin"><strong>Gimme Coffee Gates Hall Dessert Alerts</strong> - Never miss another Apple Brown Butter Bar!</p>
                                        <p><strong>Pizza Alerts!</strong> - From Big Red sauce to garlic pesto, we've got you covered!</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>More Big Red Bear Picks</summary>
                                    <div class="details-content small animate">
                                        <p class="quarter-margin"><strong>Gimme Coffee Gates Hall Dessert Alerts</strong> - Never miss another Apple Brown Butter Bar!</p>
                                        <p><strong>Pizza Alerts!</strong> - From Big Red sauce to garlic pesto, we've got you covered!</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>Never Enough Big Red Bear Picks</summary>
                                    <div class="details-content small animate">
                                        <p class="quarter-margin"><strong>Gimme Coffee Gates Hall Dessert Alerts</strong> - Never miss another Apple Brown Butter Bar!</p>
                                        <p><strong>Pizza Alerts!</strong> - From Big Red sauce to garlic pesto, we've got you covered!</p>

                                        <details>
                                            <summary>Nested Accordion</summary>
                                            <div class="details-content small animate">
                                                <p class="quarter-margin"><strong>Gimme Coffee Gates Hall Dessert Alerts</strong> - Never miss another Apple Brown Butter Bar!</p>
                                                <p><strong>Pizza Alerts!</strong> - From Big Red sauce to garlic pesto, we've got you covered!</p>
                                            </div>
                                        </details>
                                    </div>
                                </details>
                            </div>

                            <hr class="invisible">
                            <h3>Compact Style <small><code>.compact</code> (can also be used on the <code>.accordion-set</code> container)</small></h3>

                            <div class="accordion-set compact">
                                <details>
                                    <summary>Big Red Bear's Dining Picks</summary>
                                    <div class="details-content animate">
                                        <p class="quarter-margin">Gimme Coffee Gates Hall Dessert Alerts</p>
                                        <p>Pizza Alerts!</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>More Big Red Bear Picks</summary>
                                    <div class="details-content animate">
                                        <p class="quarter-margin">Gimme Coffee Gates Hall Dessert Alerts</p>
                                        <p>Pizza Alerts!</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>Never Enough Big Red Bear Picks</summary>
                                    <div class="details-content animate">
                                        <p class="quarter-margin">Gimme Coffee Gates Hall Dessert Alerts</p>
                                        <p>Pizza Alerts!</p>
                                    </div>
                                </details>
                            </div>

                            <hr class="invisible">
                            <h3>Classic Style <small><code>.classic</code> (can also be used on the <code>.accordion-set</code> container)</small></h3>

                            <div class="accordion-set classic">
                                <details>
                                    <summary>Big Red Bear's Dining Picks</summary>
                                    <p class="animate"><strong>Gimme Coffee Gates Hall Dessert Alerts</strong> - Never miss another Apple Brown Butter Bar!</p>
                                </details>
                                <details>
                                    <summary>More Big Red Bear Picks</summary>
                                    <p class="animate"><strong>Pizza Alerts!</strong> - From Big Red sauce to garlic pesto, we've got you covered!</p>
                                </details>
                                <details>
                                    <summary>Never Enough Big Red Bear Picks</summary>
                                    <p class="animate"><strong>Manndible Remembrance Society</strong> - Remembering Cornell's greatest café! Share your stories and favorite barista specials with fellow Manndible enthusiasts.</p>

                                    <details>
                                        <summary>Nested Accordion</summary>
                                        <p class="animate">Nested Accordion Content</p>
                                    </details>
                                </details>
                            </div>

                            <hr class="invisible">
                            <h3>Simple Style <small><code>.simple</code> (can also be used on the <code>.accordion-set</code> container)</small></h3>

                            <div class="accordion-set simple">
                                <details>
                                    <summary>Big Red Bear's Dining Picks</summary>
                                    <p><strong>Gimme Coffee Gates Hall Dessert Alerts</strong> - Never miss another Apple Brown Butter Bar!</p>
                                </details>
                                <details>
                                    <summary>More Big Red Bear Picks</summary>
                                    <p><strong>Pizza Alerts!</strong> - From Big Red sauce to garlic pesto, we've got you covered!</p>
                                </details>
                                <details>
                                    <summary>Never Enough Big Red Bear Picks</summary>
                                    <p><strong>Manndible Remembrance Society</strong> - Remembering Cornell's greatest café! Share your stories and favorite barista specials with fellow Manndible enthusiasts.</p>
                                </details>
                            </div>

                            <hr class="invisible">
                            <h3>Expanding Menu <small><code>.menu</code> <s>(add <code>.mobile-only</code> to only apply to mobile sizes)</s></small></h3>
                            <p>When open, the accordion will be tinted for visual separation, but the utility class <code>.no-background</code> can override this for a cleaner look.</p>

                            <details class="menu">
                                <summary>Basic Vertical Menu</summary>
                                <div class="animate slide-down">
                                    <nav aria-label="Example Expanding Menu" class="navbar vertical">
                                        <ul>
                                            <li><a href="#">Nav Item 1</a></li>
                                            <li><a href="#">Nav Item 2</a></li>
                                            <li><a href="#">Nav Item 3</a></li>
                                            <li><a href="#">Nav Item 4</a></li>
                                            <li><a href="#">Nav Item 5</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </details>

                            <details class="menu no-background">
                                <summary>Menu with No Background</summary>
                                <div class="animate slide-down">
                                    <nav aria-label="Example Expanding Menu 2" class="navbar vertical">
                                        <ul>
                                            <li><a href="#">Nav Item 1</a></li>
                                            <li><a href="#">Nav Item 2</a></li>
                                            <li><a href="#">Nav Item 3</a></li>
                                            <li><a href="#">Nav Item 4</a></li>
                                            <li><a href="#">Nav Item 5</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </details>

                            <details class="menu no-background">
                                <summary>Drupal Section Navigation</summary>
                                <div class="animate slide-down">
                                    <h2 class="menu-block-title"><a href="#" class="menu-item--active-trail">Drupal Menu</a></h2>
                                    <nav class="secondary-navigation" aria-label="Expanding Drupal Section Navigation">
                                        <ul class="menu">
                                            <li class="menu-item"><a href="#" data-drupal-link-system-path="node/63">Research Home</a></li>
                                            <li class="menu-item menu-item--expanded menu-item--active-trail parent"><a href="#" class="is-active">Beam Acceleration</a>
                                                <ul class="menu">
                                                    <li class="menu-item"><a href="#" data-drupal-link-system-path="node/300">Beam Acceleration Objectives and Deliverables</a></li>
                                                    <li class="menu-item"><a href="#" data-drupal-link-system-path="node/367">Beam Acceleration Team and Projects</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item--collapsed"><a href="#">Beam Dynamics and Control</a></li>
                                            <li class="menu-item"><a href="#">Research Ecosystem</a></li>
                                            <li class="menu-item"><a href="#">Research Highlights</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </details>


                            <hr class="invisible">
                            <h3>Single-Select <small>(sharing the same <code>name</code> attribute)</small></h3>
                            <p>While single-select groups are fundamentally compatible with "expand all" functionality, it is recommended that you only use this combination with caution, as the UX may be a bit at odds with itself. Depending on the accordion style chosen, it may also be worth considering whether animated reveals are helpful or a hinderance to the visual communication of single-select behavior.</p>
                            <p>If nested accordions appear within a single-select group, the nested accordions <em>should not</em> include the <code>name</code> attribute. Otherwise, they might close their own parent when opened!</p>

                            <details class="simple" name="single-select-group">
                                <summary>Big Red Bear's Dining Picks</summary>
                                <p class="animate">Gimme Coffee Gates Hall Dessert Alerts - Never miss another Apple Brown Butter Bar!</p>
                            </details>
                            <details class="simple" name="single-select-group">
                                <summary>More Big Red Bear Picks</summary>
                                <p class="animate">Pizza Alerts! - From Big Red sauce to garlic pesto, we've got you covered!</p>
                            </details>
                            <details class="simple" name="single-select-group">
                                <summary>Never Enough Big Red Bear Picks</summary>
                                <p class="animate">Manndible Remembrance Society - Remembering Cornell's greatest café! Share your stories and favorite barista specials with fellow Manndible enthusiasts.</p>
                            </details>


                            <hr class="section-break invisible">
                            <h2>Modal Dialog <small>(<code>&lt;dialog.ui-modal&gt;</code>)</small></h2>
                            <p><mark class="text-highlight-yellow">@TODO</mark> <mark class="text-highlight-yellow"><code>[aria-modal="true"]</code></mark></p>
                            <!-- Dialog Option 1: Inline -->
                            <!--
                                                            <div class="dialog-region"> <!~~ Extra container required for spacing. ~~>
                                                                <dialog id="messages" role="dialog" aria-modal="false" aria-live="polite" aria-label="Notifications" tabindex="-1" class="form-updates small">
                                                                    <button class="dialog-close"><span class="sr-only">Close</span></button> <!~~ The .dialog-close button is required. ~~>
                                                                    <div class="dialog-content"> <!~~ The content within .dialog-content can be changed dynamically if needed. ~~>
                                                                        <p><span class="icon-subscribed" role="img" aria-label="Subscription Icon"></span> Indicates you're subscribed! Your preferences will autosave when you make a change below.</p>
                                                                    </div>
                                                                </dialog>
                                                            </div>
                             -->
                            <!-- // -->

                            <!-- Dialog Option 2: Toast -->
                            <dialog id="messages" role="dialog" aria-modal="false" aria-label="Notifications" tabindex="-1" class="form-updates small ui-toast">
                                <button class="button dialog-close"><span class="sr-only">Close</span></button> <!-- The .dialog-close button is required. -->
                                <div aria-live="polite" class="dialog-content"> <!-- The content within .dialog-content can be changed dynamically if needed. -->
                                    <!-- The dialog starts empty for the toast option, with the initial message appearing outside. -->
                                </div>
                            </dialog>
                            <!-- // -->
                            <p><button class="button button-unsubscribe-all red round">Unsubscribe from all</button></p>


                        </section>



                        <section>
                            <h1>Styleguide</h1>
                            <p class="intro">This is the <code>.intro</code> paragraph style, used to give extra impact to an opening sentence or two. It can serve as a tagline or short prompt for the content that follows.</p>
                            <p>This paragraph demonstrates how basic text content and <a href="#">links</a> will adapt to light and <code>.dark</code> backgrounds, in various colors of the Cornell palette.</p>

                        </section>

                        <section>

                            <h2>Heading Styles</h2>

                            <article class="panel padded fill heavy-left">
                                <!-- <hr class="accent2 extra-heavy fade section-header"> -->
                                <h1>Main Content Page Heading (Heading 1)</h1>
                                <p>Basic paragraph text for comparison lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero.</p>
                                <h2>Primary Section Title (Heading 2)</h2>
                                <p><strong class="tutorial tip">Hint:</strong> The H2 accent color (red by default) is a customizable Sass variable in <code>_cwd-variables.scss</code>. A similar option is available for H3, though it is set to black by default.</p>

                                <h2 class="bigred">Accent Heading <small><code>h2.bigred</code></small></h2>
                                <h2 class="small-caps">Heading with Small Caps <span class="sans">Heading with Small Caps</span></h2>
                                <h2 class="petite-caps">Heading with Petite Caps <span class="sans">Heading with Petite Caps</span></h2>
                                <h2 class="all-small-caps">Heading with All Small Caps <span class="sans">Heading with All Small Caps</span></h2>

                                <h2>Primary Section Title (Heading 2)</h2>
                                <p><strong class="tutorial tip">Hint:</strong> The H2 accent color (red by default) is a customizable Sass variable in <code>_cwd-variables.scss</code>. A similar option is available for H3, though it is set to black by default.</p>

                                <h3>Secondary Section Title (Heading 3)</h3>
                                <h3 class="bigred">Accent Heading <small><code>h3.bigred</code></small></h3>
                                <p>Basic paragraph text for comparison lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero.</p>

                                <h4>Tertiary Section Title (Heading 4)</h4>
                                <h4 class="bigred">Accent Heading <small><code>h4.bigred</code></small></h4>
                                <p>Basic paragraph text for comparison lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero.</p>

                                <h5>Subsection Title (Heading 5)</h5>
                                <p>Basic paragraph text for comparison lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero.</p>

                                <h6>Subsection Title (Heading 6)</h6>
                                <p>Basic paragraph text for comparison lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero.</p>

                            </article>



                        </section>

                        <section>
                            <h2>Horizontal Rules</h2>
                            <p><strong class="tutorial note">Note:</strong> The latest <a href="http://www.w3.org/TR/html-markup/hr.html">W3C HTML5 Specification</a> changes the semantic definition of the <code>&lt;HR&gt;</code> tag, to represent a "thematic break," rather than a traditional stylistic divider. However, we expect that most content contributors will continue to use them in their traditional way, so the following options are provided:</p>

                            <h3 class="h6 no-toc">Default</h3>
                            <hr>
                            <h3 class="h6 no-toc flex-duo"><span>Teal</span> <span><code>.accent1</code></span></h3>
                            <hr class="accent1">
                            <h3 class="h6 no-toc flex-duo"><span>Blue</span> <span><code>.accent2</code></span></h3>
                            <hr class="accent2">
                            <h3 class="h6 no-toc flex-duo"><span>Purple</span> <span><code>.accent3</code></span></h3>
                            <hr class="accent3">
                            <h3 class="h6 no-toc flex-duo"><span>Gold</span> <span><code>.accent4</code></span></h3>
                            <hr class="accent4">
                            <h3 class="h6 no-toc flex-duo"><span>Green</span> <span><code>.accent5</code></span></h3>
                            <hr class="accent5">
                            <h3 class="h6 no-toc flex-duo"><span>Invisible</span> <span><code>.invisible</code> <small>(no visible line, spacer only)</small></span></h3>
                            <hr class="invisible">
                            <h3 class="h6 no-toc flex-duo"><span>Dotted</span> <span><code>.dotted</code></span></h3>
                            <hr class="dotted">
                            <h3 class="h6 no-toc flex-duo"><span>Dashed</span> <span><code>.dashed</code></span></h3>
                            <hr class="dashed">
                            <h3 class="h6 no-toc flex-duo"><span>Double</span> <span><code>.double</code></span></h3>
                            <hr class="double">
                            <h3 class="h6 no-toc flex-duo"><span>Heavy</span> <span><code>.heavy</code> <small>(can be paired with any accent above except "double")</small></span></h3>
                            <hr class="accent1 heavy">
                            <h3 class="h6 no-toc flex-duo"><span>Extra-Heavy</span> <span><code>.extra-heavy</code> <small>(can be paired with any accent above except "double")</small></span></h3>
                            <hr class="accent2 extra-heavy">
                            <h3 class="h6 no-toc flex-duo"><span>Faded</span> <span><code>.fade</code> <small>(can be paired with any style)</small></span></h3>
                            <hr class="accent2 extra-heavy fade">
                            <h3 class="h6 no-toc flex-duo"><span>Flourish</span> <span><code>.flourish</code> <small>(replace with your own vector logo or seal, default seal requires <a href="http://caniuse.com/#feat=svg">SVG</a> support)</small></span></h3>
                            <hr class="flourish">
                            <h3 class="h6 no-toc flex-duo"><span>Cornell Icon</span> <span><code>.bigred</code> <small>(requires <a href="http://caniuse.com/#feat=svg">SVG</a> support)</small></span></h3>
                            <hr class="bigred">

                            <aside>
                                <p><strong class="tutorial tip">Hint:</strong> Add an <code>.inline</code> class to any <code>&lt;HR&gt;</code> to allow it to fit beside floated elements. Add a <code>.section-break</code> class to any <code>&lt;HR&gt;</code> to clear floats and add additional spacing before...</p>
                                <hr class="accent2 fade section-break">
                                <p>...and after.</p>
                            </aside>

                        </section>

                        <section>

                            <h2>Images, Figures, Asides <small>(<code>&lt;img&gt;</code>, <code>&lt;figure&gt;</code>, <code>&lt;aside&gt;</code>)</small></h2>
                            <figure>
                                <img src="images/photos/graduation.jpg" width="925" height="641" alt="Graduating Seniors at Cornell Commencement 2013">
                                <figcaption>Wrap images in a <code>&lt;figure&gt;</code> tag to give them margined placement between block elements. An optional caption can be added using the <code>&lt;figcaption&gt;</code> tag.</figcaption>
                            </figure>
                            <p>
                                Images may be placed within paragraphs or between them. One or more <code>&lt;img&gt;</code> tags may also be wrapped in a <code>&lt;figure&gt;</code> tag, and optionally accompanied by a <code>&lt;figcaption&gt;</code> tag. The <a href="http://www.w3.org/TR/html-markup/figure.html">W3C HTML5 Specification</a> states that <code>figure</code> content should be self-contained, and able to be moved away from the main flow of the document without affecting the document's meaning. In other words, the <code>figure</code> is directly related to the article, but it is not dependent on a specific placement within the article. It can stand alone.
                            </p>
                            <aside>
                                <p>Contrast this with the <code>&lt;aside&gt;</code> tag, which is related to a specific region of the article. The <code>aside</code> must be placed in proximity to the content which it relates to.</p>
                            </aside>
                            <p>
                                Most images used within an article fit the definition of <code>figure</code> content, especially if a caption is included. However, it may make sense to omit the <code>figure</code> tag in some cases, such as when an image's meaning is directly dependent on nearby text.
                            </p>

                            <h3>Alignment Options</h3>
                            <p>
                                Alignment classes can be applied to <code>&lt;img&gt;</code> or <code>&lt;figure&gt;</code> tags (and potentially other block elements within the main article). They will be sized fluidly, at <strong class="tutorial">up to 40%</strong> of container width. However, <strong class="tutorial">images will only be scaled down, not up</strong>. Small images will not be scaled up if their HTML width (e.g., <code>&lt;img src="bigredbear.gif <strong>width="100"</strong>&gt;</code> is less than 40% of the container. This allows for the use of different images sizes, without blurry upscaling or unnecessary waste of space. However, to take advantage of high-density phone and tablet displays, it is still recommended that small images be twice as large natively as their HTML width (i.e., the <code>bigredbear.gif</code> image above should be 200px natively, to display sharply at 100px).
                            </p>
                            <aside>
                                <figure class="align-left align-mobile" style="width:100px">
                                    <img src="images/photos/spotlight200.jpg" width="100" height="100" alt="Stylish Ezra">
                                    <figcaption>"I would found an institution..."</figcaption>
                                </figure>
                                <p><strong class="tutorial note">Note:</strong> Since images are not upscaled, a small image with a wide caption may not display correctly. The caption may cause the <code>figure</code> container to be wider than its image, unless the <code>figure</code> is given an explicit width to match the image. Take special care in these cases (or consider using a larger image if suitable).</p>
                                <p>
                                    In the adjacent example, the <code>figure</code> container has an explicit width of 100px, to match the HTML size of the photo.
                                </p>
                            </aside>
                            <aside>
                                <strong class="tutorial note">Note:</strong> On small screen sizes, below <strong class="tutorial">480px</strong> wide, images will try to fill the width of their container, regardless of alignment. For this reason, it is recommended that all content images have a native size that is no smaller than 480px. However, this behavior can be overridden using the <code>.align-mobile</code> class, demonstrated below.
                            </aside>

                            <h4>Align Left <small><code>.align-left</code></small></h4>
                            <a href="http://blogs.cornell.edu/pawsandreflect" class="no-deco">
                                <figure class="align-left">
                                    <img src="images/photos/bearhug.jpg" width="1125" height="750" alt="Homecoming Bear Hug!">
                                    <figcaption>Free Hugs!</figcaption>
                                </figure>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero. In vitae libero sit amet velit lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie. Morbi vitae lacus metus, vel porttitor eros. Duis sed consectetur ipsum. Curabitur et velit in ante dignissim scelerisque. Duis non ipsum at mi pharetra consequat. Quisque eu tortor non ipsum laoreet feugiat. Sed blandit volutpat ligula, fermentum aliquet lectus convallis at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero. In vitae libero sit amet velit lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie.
                            </p>

                            <h4>Align Right <small><code>.align-right</code></small></h4>
                            <img class="align-right" src="images/photos/vetstudent.jpg" width="1125" height="750" alt="Vet Student with a Feline Associate">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero. In vitae libero sit amet velit lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie. Morbi vitae lacus metus, vel porttitor eros. Duis sed consectetur ipsum. Curabitur et velit in ante dignissim scelerisque. Duis non ipsum at mi pharetra consequat. Quisque eu tortor non ipsum laoreet feugiat. Sed blandit volutpat ligula, fermentum aliquet lectus convallis at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero. In vitae libero sit amet velit lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie.
                            </p>

                            <h4>Maintain Alignment on Mobile <small><code>.align-mobile</code></small></h4>
                            <figure class="align-left align-mobile">
                                <img src="images/photos/plantations_portrait.jpg" width="550" height="750" alt="Cornell Plantations">
                                <figcaption>This tall image will maintain its 40% width and left alignment at all screen sizes.</figcaption>
                            </figure>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero. In vitae libero sit amet velit lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie. Morbi vitae lacus metus, vel porttitor eros. Duis sed consectetur ipsum. Curabitur et velit in ante dignissim scelerisque. Duis non ipsum at mi pharetra consequat. Quisque eu tortor non ipsum laoreet feugiat. Sed blandit volutpat ligula, fermentum aliquet lectus convallis at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero. In vitae libero sit amet velit lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie.
                            </p>

                            <aside class="sidebar">
                                <h5>Aside <code>.sidebar</code></h5>
                                <p><code>Aside</code> content should be related to the nearby flow of information, and placed inside the same container. It is often displayed as a traditional "sidebar" but can also be used for inline annotations or footnotes.</p>
                            </aside>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero. In vitae libero sit amet velit lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie. Morbi vitae lacus metus, vel porttitor eros. Duis sed consectetur ipsum. Curabitur et velit in ante dignissim scelerisque. Duis non ipsum at mi pharetra consequat. Quisque eu tortor non ipsum laoreet feugiat. Sed blandit volutpat ligula, fermentum aliquet lectus convallis at.
                            </p>
                            <p>
                                Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie. Morbi vitae lacus metus, vel porttitor eros. Duis sed consectetur ipsum. Curabitur et velit in ante dignissim scelerisque. Duis non ipsum at mi pharetra consequat. Quisque eu tortor non ipsum laoreet feugiat. Sed blandit volutpat ligula, fermentum aliquet lectus convallis at.
                            </p>
                            <aside class="column">
                                <h5>Aside <code>.column</code></h5>
                                <p><code>Aside</code> content should be related to the nearby flow of information, and placed inside the same container. It is often displayed as a traditional "sidebar" but can also be used for inline annotations or footnotes.</p>
                            </aside>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero. In vitae libero sit amet velit lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie. Morbi vitae lacus metus, vel porttitor eros. Duis sed consectetur ipsum. Curabitur et velit in ante dignissim scelerisque. Duis non ipsum at mi pharetra consequat. Quisque eu tortor non ipsum laoreet feugiat. Sed blandit volutpat ligula, fermentum aliquet lectus convallis at.
                            </p>

                            <p>
                                Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie. Morbi vitae lacus metus, vel porttitor eros. Duis sed consectetur ipsum. Curabitur et velit in ante dignissim scelerisque. Duis non ipsum at mi pharetra consequat. Quisque eu tortor non ipsum laoreet feugiat. Sed blandit volutpat ligula, fermentum aliquet lectus convallis at.
                            </p>

                            <h3>Multiple Images in One Figure</h3>

                            <p>Use the <code>.two-col</code>, <code>.three-col</code>, or <code>.four-col</code> classes to instruct a <code>&lt;figure&gt;</code> tag to display images side-by-side. Add <code>.margined</code> to include a small margin between them. Take special care not to apply the <code>.marg<strong class="tutorial">ar</strong>ined</code> class by mistake. This would result in an oily mess.</p>

                            <figure class="three-col margined">
                                <img src="images/photos/vet_panel1.jpg" width="480" height="620" alt="Vet Student with a Canine Associate">
                                <img src="images/photos/vet_panel2.jpg" width="480" height="620" alt="Vet Research Tower">
                                <img src="images/photos/vet_panel3.jpg" width="480" height="620" alt="Giraffes!">
                                <figcaption>These images are part of a single <code>&lt;figure&gt;</code>, sharing the same <code>&lt;figcaption&gt;</code>. They are also free of margarine.</figcaption>
                            </figure>

                            <aside>
                                <strong class="tutorial note">Note:</strong> Most columned content will automatically become a single column at mobile sizes. However, sets of images inside a <code>figure</code> will maintain their column layout. The only exception is four-column sets, which will become two rows of two.
                            </aside>

                            <figure class="align-left two-col margined">
                                <img src="images/photos/weill_panel1.jpg" width="480" height="620" alt="Weill Cornell Medical College">
                                <img src="images/photos/weill_panel2.jpg" width="480" height="620" alt="Weill Medical Student">
                                <figcaption>This <code>&lt;figure&gt;</code> is aligned left, so it should probably hold no more than two columns.</figcaption>
                            </figure>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae. Fusce id tellus libero. In vitae libero sit amet velit lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie. Morbi vitae lacus metus, vel porttitor eros. Duis sed consectetur ipsum. Curabitur et velit in ante dignissim scelerisque. Duis non ipsum at mi pharetra consequat. Quisque eu tortor non ipsum laoreet feugiat. Sed blandit volutpat ligula, fermentum aliquet lectus convallis at. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie.
                            </p>

                        </section>

                        <section>
                            <h2>Cornell.edu Icons</h2>
                            <p>Include <code>fonts/cornell-custom.css</code> to use Cornell.edu's custom icon font:</p>
                            <ul class="list-menu three-col half-margin-all small">
                                <li class="icon icon-arrow-down">.icon-arrow-down</li>
                                <li class="icon icon-arrow-left">.icon-arrow-left</li>
                                <li class="icon icon-arrow-right">.icon-arrow-right</li>
                                <li class="icon icon-arrow-thin-right">.icon-arrow-thin-right</li>
                                <li class="icon icon-arrow-up">.icon-arrow-up</li>
                                <li class="icon icon-check">.icon-check</li>
                                <li class="icon icon-clear-day">.icon-clear-day</li>
                                <li class="icon icon-clear-night">.icon-clear-night</li>
                                <li class="icon icon-clocktower">.icon-clocktower</li>
                                <li class="icon icon-clocktower-bold">.icon-clocktower-bold</li>
                                <li class="icon icon-close">.icon-close</li>
                                <li class="icon icon-email">.icon-email</li>
                                <li class="icon icon-facebook">.icon-facebook</li>
                                <li class="icon icon-fog">.icon-fog</li>
                                <li class="icon icon-info-alert">.icon-info-alert</li>
                                <li class="icon icon-info-heart">.icon-info-heart</li>
                                <li class="icon icon-info-news">.icon-info-news</li>
                                <li class="icon icon-info-pawprint">.icon-info-pawprint</li>
                                <li class="icon icon-instagram">.icon-instagram</li>
                                <li class="icon icon-logo">.icon-logo</li>
                                <li class="icon icon-menu">.icon-menu</li>
                                <li class="icon icon-overcast">.icon-overcast</li>
                                <li class="icon icon-partly-cloudy-day">.icon-partly-cloudy-day</li>
                                <li class="icon icon-partly-cloudy-night">.icon-partly-cloudy-night</li>
                                <li class="icon icon-plus">.icon-plus</li>
                                <li class="icon icon-rain">.icon-rain</li>
                                <li class="icon icon-reset">.icon-reset</li>
                                <li class="icon icon-search">.icon-search</li>
                                <li class="icon icon-search-big">.icon-search-big</li>
                                <li class="icon icon-sleet">.icon-sleet</li>
                                <li class="icon icon-snow">.icon-snow</li>
                                <li class="icon icon-submenu">.icon-submenu</li>
                                <li class="icon icon-thunderstorm">.icon-thunderstorm</li>
                                <li class="icon icon-twitter">.icon-twitter</li>
                                <li class="icon icon-windy">.icon-windy</li>
                                <li class="icon icon-youtube">.icon-youtube</li>
                            </ul>
                        </section>

                        <section>
                            <h2>Inline Styles</h2>
                            <p>
                                There are various ways to highlight or emphasize text within a paragraph. Traditional <code>&lt;strong&gt;</code> and <code>&lt;em&gt;</code> tags can be used for basic <strong>bold</strong> and <em>italic</em> styling. There are also special CSS classes that can be added to these tags, or to <code>&lt;span&gt;</code> tags, to apply a more distinctive appearance. One example used throughout this document is <code>strong.tutorial</code>, which produces bold, green text to draw attention to important terms such as <strong class="tutorial">labels, values, tips, or steps in a process</strong>.
                            </p>
                            <aside>
                                <strong class="tutorial tip">Hint:</strong> The "tutorial" accent color (green by default) is a customizable Sass variable in <code>_cwd-variables.scss</code>.
                            </aside>
                            <h3>Text Highlights</h3>
                            <p>
                                Five basic highlight colors are provided, with the classes <code>.text-highlight-red</code>, <code>.text-highlight-green</code>, <code>.text-highlight-yellow</code>, <code>.text-highlight-blue</code>, and <code>.text-highlight-purple</code>. These classes can be applied to <code>&lt;span&gt;</code> tags, or to an HTML5 newcomer, the <code>&lt;mark&gt;</code> tag. The <mark>default mark tag is bright yellow</mark>, while the five highlight colors below are a bit more muted but still easy to pick out from a white background. Lorem ipsum dolor sit amet. <mark class="text-highlight-red">Fusce id tellus libero. In vitae libero sit amet velit</mark> lobortis congue in eu velit. Mauris venenatis, nisi vitae ultricies semper, leo dolor porta risus, vitae molestie magna sapien iaculis nibh. Etiam facilisis mauris sed arcu tempus vel dapibus dui molestie. Morbi vitae <mark class="text-highlight-green">lacus metus, vel porttitor</mark> eros. Duis sed consectetur ipsum. Curabitur et velit in ante dignissim scelerisque. Duis non ipsum at mi pharetra consequat. Quisque eu tortor non ipsum laoreet feugiat. Sed blandit volutpat ligula, <mark class="text-highlight-yellow">dui nec eros varius ac molestie ante malesuada</mark>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <mark class="text-highlight-blue">Morbi aliquam fermentum lacus, ut sagittis</mark> dui porttitor vitae. Donec congue dui at velit consectetur fermentum. Fusce id tellus libero. Donec <mark class="text-highlight-purple">congue dui at velit consectetur</mark> fermentum.
                            </p>
                            <h3>Blockquote</h3>
                            <p>A <code>blockquote</code> element has traditionally been used to display long quotations (including pull quotes from within the current document). However, the latest <a href="http://www.w3.org/TR/html-markup/blockquote.html">W3C HTML5 Specification</a> refines this definition. The quote should be from <em>another source</em> (typically another web page), and optionally include the address of this source in a <code>&lt;cite&gt;</code> or <code>&lt;footer&gt;</code> tag (or both, as seen in the example below).</p>
                            <h4>Standard Blockquote</h4>
                            <blockquote>
                                <p>The <code>blockquote</code> element represents content that is quoted from another source, optionally with a citation which must be within a <code>footer</code> or <code>cite</code> element, and optionally with in-line changes such as annotations and abbreviations.</p>
                                <p>Content inside a <code>blockquote</code> other than citations and in-line changes must be quoted from another source, whose address, if it has one, may be cited in the cite attribute.</p>
                                <footer><cite><a href="http://www.w3.org/html/wg/drafts/html/master/semantics.html#the-blockquote-element">4.4.4 The blockquote element</a> - W3C Working Group, 2013</cite></footer>
                            </blockquote>
                            <p><strong class="tutorial tip">Hint:</strong> By default, blockquotes will not automatically display quotation marks. They can be typed in manually, but another option is to use the <code>&lt;q&gt;</code> tag:</p>
                            <blockquote>
                                <p><q>The content of this paragraph is also wrapped within a <code>&lt;q&gt;</code> tag. In addition to rendering quotation marks, you'll notice that the opening quote is offset to the left, allowing the first line of text to cleanly align with additional lines below it. Lines aligned!</q></p>
                            </blockquote>
                            <h4>Impact Blockquote <small><code>.impact</code></small></h4>
                            <p>This option displays text at a larger size and in a contrasting font. It is best used for short quotes.</p>
                            <blockquote class="impact">
                                <p>Some have called Cornell the “first American university.”</p>
                                <!-- <footer><cite><a href="#">Citation Link</a> - Citation Text</cite></footer> -->
                            </blockquote>
                            <h4>Offset Blockquote <small><code>.offset</code></small></h4>
                            <p>Like the impact blockquote, this option displays text at a larger size and in a contrasting font. It also floats the blockquote to one side, and extends into the side margin for extra visual contrast. The <code>.offset</code> and <code>.impact</code> options look the same on small screens. The offset will only occur on larger screens with side margins to accomodate it.</p>
                            <blockquote class="offset">
                                <p>Some have called Cornell the “first American university.”</p>
                                <!-- <footer><cite><a href="#">Citation Link</a> - Citation Text</cite></footer> -->
                            </blockquote>
                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec sed odio dui. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
                            <p><strong class="tutorial note">Note:</strong> This option is compatible with <code>.sidebar-left</code>, but is better suited to <code>.sidebar-right</code> or full-width content.</p>

                        </section>

                        <section>
                            <h3>Preformatted Text <small><code>&lt;pre&gt;</code>, <code>&lt;xmp&gt;</code>, <code>&lt;plaintext&gt;</code>, <code>&lt;listing&gt;</code></small></h3>
                            <pre>pre {
        padding: 1em 2em;
        background: hotpink;
    }</pre>
                            <h3>More Styled Elements</h3>
                            <div class="flex-grid">
                                <div class="flex-4"><abbr title="Abbreviation">ABBR</abbr></div>
                                <div class="flex-8 smallprint">Abbreviation (or acronym), the definition of which should appear in a <code>title</code> attribute.</div>
                                <hr>
                                <div class="flex-4"><strong>Strong</strong></div>
                                <div class="flex-8 smallprint">In recent revisions of the <a href="http://www.w3.org/TR/html-markup/b.html">W3C HTML5 Specification</a>, bold tags (<code>&lt;b&gt;</code>) have made a comeback. In comparison, <code>&lt;strong&gt;</code> is for "a span of text with strong importance", while <code>&lt;b&gt;</code> is for text "offset from its surrounding content without conveying any extra emphasis or importance, and for which the conventional typographic presentation is bold text". When deciding which to use, stick with <code>strong</code> unless the text is not meant to have any special impact, and is only bold as a literary convention. (This distinction is somewhat subjective, so don't sweat it too much! Practically speaking, either is fine.)</div>
                                <hr>
                                <div class="flex-4"><em>Emphasis</em></div>
                                <div class="flex-8 smallprint">Like the strong/bold comparison above, recent revisions of the <a href="http://www.w3.org/TR/html-markup/i.html">W3C HTML5 Specification</a> have given semantic meaning to italic tags (<code>&lt;i&gt;</code>). <code>&lt;em&gt;</code> is for "a span of text with emphatic stress", while <code>&lt;i&gt;</code> is for text "offset from its surrounding content without conveying any extra emphasis or importance, and for which the conventional typographic presentation is italic text". When deciding which to use, stick with <code>em</code> unless text is not meant to stand out, and is only italic as a literary convention.</div>
                                <hr>
                                <div class="flex-4"><cite>Cite</cite></div>
                                <div class="flex-8 smallprint">A cited title of a work, typically used inside a <code>&lt;blockquote&gt;</code>, but also valid anywhere in the flow of a document.</div>
                                <hr>
                                <div class="flex-4"><code>Code Fragment</code></div>
                                <div class="flex-8 smallprint">Used extensively in this document to call out HTML markup, CSS classes, and other code samples. For larger pieces of code, with multiple lines and indenting, consider the <code>&lt;pre&gt;</code> (preformatted text) tag instead.</div>
                                <hr>
                                <div class="flex-4"><sup>Superscript</sup> and <sub>Subscript</sub></div>
                                <div class="flex-8 smallprint">Archnemeses who are more alike than they will ever admit.</div>
                            </div>
                        </section>

                        <section>
                            <h2>Panels and Accent Options</h2>
                            <p>Content can be wrapped in containers to create visual groupings, or to draw attention to special notes or messages. The CSS classes used below can be applied to regular <code>&lt;DIV&gt;</code> tags, or to specialized tags like <code>&lt;ASIDE&gt;</code>, <code>&lt;SECTION&gt;</code>, and possibly others. <strong class="tutorial">Aside</strong> tags should be used when the content fits the <a href="http://www.w3.org/TR/html-markup/aside.html">W3C HTML5 Specification</a> (<code>aside</code> content should be secondary, but related to the nearby flow of information). <strong class="tutorial">Section</strong> tags can be used to wrap information that forms a thematic group (one which would be appropriate in a document outline). See the <a href="http://www.w3.org/TR/html-markup/section.html">W3C HTML5 Specification</a> and <a href="https://www.w3.org/wiki/HTML/Elements/section">W3C Wiki</a> for more information.</p>

                            <aside><strong class="tutorial note">Note:</strong> Keep accessibility in mind when deciding to group content with DIVs. The content will only be grouped <em>visually</em>. To a screen-reader, it will appear like any other content in the flow of the document. This may be desirable, if the visual grouping does not communicate essential document structure. However, you could add an <a href="http://www.w3.org/TR/wai-aria/roles">ARIA role</a> to the DIV (e.g., <code>&lt;div class="panel" role="alert" aria-label="User Warning"&gt;</code>) to define its function. Or, if appropriate, use an <code>&lt;ASIDE&gt;</code> or <code>&lt;SECTION&gt;</code> tag to take advantage of their implied roles.</aside>

                            <aside><strong class="tutorial note">Note:</strong> The <code>.panel</code> class name is also used by Bootstrap. The options below should be compatible, but keep an eye out for anything unexpected! These options were not built on Bootstrap's implementation.</aside>

                            <h3>Panels</h3>

                            <p><strong class="tutorial tip">Hint:</strong> All options below can be mixed and matched. Use the <code>.no-border</code> class to omit the default 1px border, or <code>.no-background</code> for a transparent background.</p>

                            <div class="panel">
                                <p>Default Gray (<code>class="panel"</code>)</p>
                            </div>
                            <div class="panel accent-white">
                                <p>Pure White (<code>class="panel accent-white"</code>)</p>
                            </div>
                            <div class="panel accent-teal">
                                <p>Teal (<code>class="panel accent-teal"</code>)</p>
                            </div>
                            <div class="panel accent-blue">
                                <p>Blue (<code>class="panel accent-blue"</code>)</p>
                            </div>
                            <div class="panel accent-purple">
                                <p>Purple (<code>class="panel accent-purple"</code>)</p>
                            </div>
                            <div class="panel accent-gold">
                                <p>Gold (<code>class="panel accent-gold"</code>)</p>
                            </div>
                            <div class="panel accent-green">
                                <p>Green (<code>class="panel accent-green"</code>)</p>
                            </div>
                            <div class="panel accent-red">
                                <p>Red (<code>class="panel accent-red"</code>)</p>
                            </div>

                            <h3>Light Colors</h3>

                            <div class="panel accent-light-gray">
                                <p>Light Gray (<code>class="panel accent-light-gray"</code>)</p>
                            </div>
                            <div class="panel accent-light-teal">
                                <p>Light Teal (<code>class="panel accent-light-teal"</code>)</p>
                            </div>
                            <div class="panel accent-light-blue">
                                <p>Light Blue (<code>class="panel accent-light-blue"</code>)</p>
                            </div>
                            <div class="panel accent-light-purple">
                                <p>Light Purple (<code>class="panel accent-light-purple"</code>)</p>
                            </div>
                            <div class="panel accent-light-gold">
                                <p>Light Gold (<code>class="panel accent-light-gold"</code>)</p>
                            </div>
                            <div class="panel accent-light-green">
                                <p>Light Green (<code>class="panel accent-light-green"</code>)</p>
                            </div>
                            <div class="panel accent-light-red">
                                <p>Light Red (<code>class="panel accent-light-red"</code>)</p>
                            </div>

                            <h3>Heavy Border (left or top, with or without fills)</h3>

                            <div class="panel heavy-left">
                                <p>Default (<code>class="panel heavy-left"</code>)</p>
                            </div>
                            <div class="panel accent-teal heavy-left no-background">
                                <p>Teal (<code>class="panel accent-teal heavy-left no-background"</code>)</p>
                            </div>
                            <div class="panel accent-blue heavy-left">
                                <p>Blue (<code>class="panel accent-blue heavy-left"</code>)</p>
                            </div>
                            <div class="panel accent-purple heavy-top no-background">
                                <p>Purple (<code>class="panel accent-purple heavy-top no-background"</code>)</p>
                            </div>
                            <div class="panel accent-gold heavy-top">
                                <p>Gold (<code>class="panel accent-gold heavy-top"</code>)</p>
                            </div>
                            <div class="panel accent-green heavy-top no-background">
                                <p>Green (<code>class="panel accent-green heavy-top no-background"</code>)</p>
                            </div>
                            <div class="panel accent-red heavy-top">
                                <p>Red (<code>class="panel accent-red heavy-top"</code>)</p>
                            </div>

                            <h3>Indenting</h3>

                            <div class="panel indent1">
                                <p>Indent 1 Step (<code>class="panel indent1"</code>)</p>
                            </div>
                            <div class="panel indent2">
                                <p>Indent 2 Steps (<code>class="panel indent2"</code>)</p>
                            </div>
                            <div class="panel indent3">
                                <p>Indent 3 Steps (<code>class="panel indent3"</code>)</p>
                            </div>
                            <div class="panel indent4">
                                <p>Indent 4 Steps (<code>class="panel indent4"</code>)</p>
                            </div>

                            <h3>Padding, Border, Background, Shadow</h3>

                            <div class="panel padded">
                                <p>Extra Padding (<code>class="panel padded"</code>)</p>
                            </div>
                            <div class="panel accent-white no-border shadow">
                                <p>White, No Border, Box Shadow (<code>class="panel accent-white no-border shadow"</code>)</p>
                            </div>
                            <div class="panel no-padding no-border no-background">
                                <p>No Padding, No Border, No Background (<code>class="panel no-padding no-border no-background"</code>)</p>
                            </div>

                            <hr class="invisible">

                            <h3>Pills <small><code>.pill</code></small></h3>
                            <p>The Panels system, particularly its accent colors, can also be used for "pills," which are compact versions intended for small fragments of text. A common use for pills is to visualize metadata (tags, categories, etc...), making them easier to recognize. Pills use the class <code>.pill</code> instead of <code><s>.panel</s></code>, and can be used on <code>&lt;DIV&gt;</code> or <code>&lt;SPAN&gt;</code> tags as appropriate. They can also be interactive elements, as <code>&lt;A&gt;</code>, <code>&lt;BUTTON&gt;</code>, or <code>&lt;SPAN role="button"&gt;</code> tags.</p>

                            <p class="half-margin">
                                        <span class="pill">
                                            Default Gray
                                        </span>
                                <span class="pill accent-white">
                                            Pure White
                                        </span>
                                <span class="pill accent-teal">
                                            Teal
                                        </span>
                                <span class="pill accent-blue">
                                            Blue
                                        </span>
                                <span class="pill accent-purple">
                                            Purple
                                        </span>
                                <span class="pill accent-gold">
                                            Gold
                                        </span>
                                <span class="pill accent-green">
                                            Green
                                        </span>
                                <span class="pill accent-red">
                                            Red
                                        </span>
                            </p>

                            <p class="half-margin">
                                        <span class="pill accent-light-gray">
                                            Light Gray
                                        </span>
                                <span class="pill accent-light-teal">
                                            Light Teal
                                        </span>
                                <span class="pill accent-light-blue">
                                            Light Blue
                                        </span>
                                <span class="pill accent-light-purple">
                                            Light Purple
                                        </span>
                                <span class="pill accent-light-gold">
                                            Light Gold
                                        </span>
                                <span class="pill accent-light-green">
                                            Light Green
                                        </span>
                                <span class="pill accent-light-red">
                                            Light Red
                                        </span>
                            </p>

                            <p class="half-margin">
                                        <span class="pill heavy-left">
                                            Default
                                        </span>
                                <span class="pill accent-teal heavy-left no-background">
                                            Teal
                                        </span>
                                <span class="pill accent-blue heavy-left">
                                            Blue
                                        </span>
                                <span class="pill accent-purple heavy-top no-background">
                                            Purple
                                        </span>
                                <span class="pill accent-gold heavy-top">
                                            Gold
                                        </span>
                                <span class="pill accent-green heavy-top no-background">
                                            Green
                                        </span>
                                <span class="pill accent-red heavy-top">
                                            Red
                                        </span>
                            </p>

                            <p class="half-margin">
                                <a href="#" class="pill no-border">
                                    Link
                                </a>
                                <a href="#" class="pill no-border no-deco">
                                    Link, No-Deco
                                </a>
                                <button class="pill no-border">
                                    Button
                                </button>
                                <span class="pill no-border" role="button">
                                            Button Role
                                        </span>
                                <span class="pill accent-teal no-border" role="button">
                                            Teal Button
                                        </span>
                                <span class="pill accent-blue no-border" role="button">
                                            Blue Button
                                        </span>
                                <span class="pill accent-purple no-border" role="button">
                                            Purple Button
                                        </span>
                                <span class="pill accent-gold no-border" role="button">
                                            Gold Button
                                        </span>
                                <span class="pill accent-green no-border" role="button">
                                            Green Button
                                        </span>
                                <span class="pill accent-red no-border" role="button">
                                            Red Button
                                        </span>
                            </p>
                        </section>

                        <section>
                            <h2>Lists</h2>

                            <h3>Unordered List</h3>
                            <div class="two-col">
                                <div>
                                    <h4 class="h5">Example 1</h4>
                                    <ul>
                                        <li>List Item</li>
                                        <li>List Item
                                            <ul>
                                                <li>Nested List Item</li>
                                                <li>Nested List Item</li>
                                                <li>Double Nested:
                                                    <ul>
                                                        <li>Nested List Item</li>
                                                        <li>Nested List Item</li>
                                                    </ul>
                                                </li>
                                                <li>Nested List Item</li>
                                                <li>Nested List Item</li>
                                            </ul>
                                        </li>
                                        <li>List Item</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="h5">Example 2</h4>
                                    <ul>
                                        <li>List Item</li>
                                        <li>Nested Ordered:
                                            <ol>
                                                <li>Nested List Item
                                                    <ul>
                                                        <li>Nested Unordered List Item</li>
                                                        <li>Nested Unordered List Item</li>
                                                    </ul>
                                                </li>
                                                <li>Nested List Item</li>
                                            </ol>
                                        </li>
                                        <li><a href="#">Linked List Item</a></li>
                                        <li>List Item</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- NYI
                            <h4>
                                Table of Contents <small>(<code>ul.toc</code>)</small>
                            </h4>
                            <ul class="toc">
                                <li><a href="#">Introduction</a></li>
                                <li><a href="#">Section One Title</a></li>
                                <li><a href="#">Section Two Title</a></li>
                                <li><a href="#">Section Three Title</a></li>
                                <li><a href="#">Section Four Title</a></li>
                            </ul>
                            -->
                            <h3>Ordered Lists</h3>
                            <p>Numbering options for ordered lists can be defined with the traditional <code>type</code> attribute, or via CSS classes. Some options, like Decimal with Leading Zero are only available via CSS. For fonts like Freight Sans, with non-lining numerals, the <code>lnum</code> utility class can be used for cleaner alignment. <span class="bear">Big Red Bear</span> in mind, however, that this will also apply to content within the list item.</p>
                            <div class="three-col">
                                <div>
                                    <h4 class="h5">Default <small>(with <code>.lnum</code>)</small></h4>
                                    <ol class="lnum"> <!-- .lnum used for lining figures in fonts like Freight Sans -->
                                        <li>List Item 123</li>
                                        <li>List Item 456</li>
                                        <li>List Item 789</li>
                                    </ol>
                                    <h4 class="h5">Leading Zero <small>(only via CSS)</small></h4>
                                    <ol class="decimal-leading-zero"> <!-- note: this numbering style can only be done with CSS -->
                                        <li>List Item 123</li>
                                        <li>List Item 456</li>
                                        <li>List Item 789</li>
                                    </ol>
                                </div>
                                <div>
                                    <h4 class="h5">Lowercase Alpha</h4>
                                    <ol type="a">
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                    </ol>
                                    <h4 class="h5">Uppercase Alpha</h4>
                                    <ol type="A">
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                    </ol>
                                </div>
                                <div>
                                    <h4 class="h5">Lowercase Roman</h4>
                                    <ol type="i">
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                    </ol>
                                    <h4 class="h5">Uppercase Roman</h4>
                                    <ol type="I">
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                    </ol>
                                </div>
                            </div>

                            <h3>Definition List</h3>
                            <dl>
                                <dt>Definition Term One</dt>
                                <dd>Definition ipsum dolor sit amet.</dd>
                                <dt>Definition Term Two</dt>
                                <dd>Definition morbi aliquam ut fermentum lacus.</dd>
                                <dt>Third Definition Term</dt>
                                <dd>Definition sagittis dui porttitor vitae.</dd>
                            </dl>

                            <h3>Custom Unordered List</h3>
                            <p>Icon-driven bullets can be used for higher visual impact. The <code>.custom</code> class on its own will only apply to direct children in the list structure, allowing finer control (custom bullets are often best-suited to single-level lists). In a case where you'd like the icons to appear for all nested list items as well, include the <code>.recursive</code> class. It will apply to all Unordered List descendants, but will not apply to any Ordered Lists that are mixed in. <!-- By default, Custom Unordered List bullets use a <a href="https://fontawesome.com/v4.7.0/cheatsheet/">FontAwesome</a> caret glyph. --> By default, Custom Unordered List bullets use a <span style="color:#b31b1b">■</span> (red square). A few other example are provided below, using glyphs from an icon font (<a href="https://fontawesome.com/v4.7.0/cheatsheet/">FontAwesome</a> or <a href="http://zavoloklom.github.io/material-design-iconic-font/cheatsheet.html">Material Design Iconic</a>) or from emoji.</p>
                            <h4>Simple <small>(<code>ul.custom</code>)</small></h4>
                            <ul class="custom">
                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                <li>List Item</li>
                                <li>Nested Ordered:
                                    <ol>
                                        <li>Nested List Item
                                            <ul>
                                                <li>Nested Unordered List Item</li>
                                                <li>Nested Unordered List Item</li>
                                            </ul>
                                        </li>
                                        <li>Nested List Item</li>
                                    </ol>
                                </li>
                                <li>List Item</li>
                            </ul>
                            <h4>Recursive <small>(<code>ul.custom.recursive</code>)</small></h4>
                            <ul class="custom recursive">
                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                <li>List Item</li>
                                <li>Nested Ordered:
                                    <ol>
                                        <li>Nested List Item
                                            <ul>
                                                <li>Nested Unordered List Item</li>
                                                <li>Nested Unordered List Item</li>
                                            </ul>
                                        </li>
                                        <li>Nested List Item</li>
                                    </ol>
                                </li>
                                <li>List Item</li>
                            </ul>
                            <h4>Inline <small>(<code>ul.custom.inline</code>)</small></h4>
                            <ul class="custom inline">
                                <li>List item ipsum dolor sit amet</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                            </ul>
                            <h4>No Bullet <small>(<code>ul.custom.no-bullet</code>)</small></h4>
                            <ul class="custom no-bullet">
                                <li>List Item in Stealth Mode</li>
                                <li>List Item in Stealth Mode</li>
                            </ul>
                            <h4>Chevrons <small>(<code>ul.custom.chevrons</code>)</small></h4>
                            <ul class="custom chevrons">
                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                <li>List Item</li>
                            </ul>
                            <h4>Cornell.edu-style <small>(<code>ul.custom.cu</code> or <code>ul.cu-list</code>)</small></h4>
                            <p>Smaller red squares with top-level indenting, in the style of Cornell's main site. This list style is automatically recursive.</p>
                            <ul class="custom cu">
                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                <li>List Item
                                    <ul>
                                        <li>Nested List Item
                                            <ul>
                                                <li>Nested List Item</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>List Item</li>
                            </ul>
                            <p>A typical CU list with compact, medium-weight links, and no text-decoration:</p>
                            <ul class="cu-list small no-deco text-weight-medium">
                                <li><a href="https://trustees.cornell.edu/">Board of Trustees</a></li>
                                <li><a href="http://president.cornell.edu/">Office of the President</a></li>
                                <li><a href="http://provost.cornell.edu/">Office of the Provost</a></li>
                                <li><a href="http://diversity.cornell.edu/">Diversity &amp; Inclusion</a></li>
                                <li><a href="https://theuniversityfaculty.cornell.edu/faculty-senate/">Faculty Senate</a></li>
                            </ul>

                            <!--
                                                            <h4>Success Checkmarks <small>(<code>ul.custom.success</code>)</small></h4>
                                                            <ul class="custom success">
                                                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                                                <li>List Item</li>
                                                            </ul>
                                                            <h4>Failure X's <small>(<code>ul.custom.failure</code>)</small></h4>
                                                            <ul class="custom failure">
                                                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                                                <li>List Item</li>
                                                            </ul>
                                                            <h4>Failure Warnings <small>(<code>ul.custom.warning</code>)</small></h4>
                                                            <ul class="custom warning">
                                                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                                                <li>List Item</li>
                                                            </ul>
                                                            <h4>Notifications <small>(<code>ul.custom.notifications</code>)</small></h4>
                                                            <ul class="custom notifications">
                                                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                                                <li>List Item</li>
                                                            </ul>
                                                            <h4 class="low-margin">On/Off <small>(<code>ul.custom.on-off</code>)</small></h4>
                                                            <p class="smallprint">Use the <code>.on</code> or <code>.off</code> class on <code>&lt;LI&gt;</code> tags to mark each item.</p>
                                                            <ul class="custom on-off">
                                                                <li class="on">This item is on/enabled/passed.</li>
                                                                <li class="off">This item is off/disabled/failed.</li>
                                                                <li>This one's unknown or not set. Oh no!</li>
                                                            </ul>
                                                            <h4 class="low-margin">On/Off as Steps <small>(<code>ul.custom.on-off-steps</code>)</small></h4>
                                                            <p class="smallprint">Use the <code>.on</code> or <code>.off</code> class on <code>&lt;LI&gt;</code> tags to mark each item.</p>
                                                            <ul class="custom on-off-steps">
                                                                <li class="on">This step is complete.</li>
                                                                <li class="off">This step is not.</li>
                                                                <li>This one's unknown or not set. Oh no!</li>
                                                            </ul>
                             -->
                            <h4>Nerdy List <small>(<code>ul.custom.nerd</code>)</small></h4>
                            <p>Emoji can be used as well, as seen in the example below. Just remember that artwork for emoji characters varies across different operating systems.</p>
                            <ul class="custom nerd">
                                <li>A nerdy list item.</li>
                                <li>A nerdy list item.</li>
                                <li class="off">Not a nerdy item. (how'd this get in here?)</li>
                                <li>A nerdy item once more. (thank goodness!)</li>
                            </ul>

                            <aside>
                                <p><strong class="tutorial tip">Hint:</strong> Every icon has a different visual weight and line-height. To choose a different glyph and adjust its properties, add and customize any of the following in your project CSS:</p>
                                <pre>
    ul.custom > li:before, ul.custom.recursive ul > li:before {
         content: '\f0da';
         font-size: inherit;
         line-height: inherit;
         color: #000;
         opacity: 0.5;
         top: 0;
         left: 2px;
    }
    </pre>
                            </aside>

                            <h3>Custom Ordered List</h3>
                            <p>Prominent numbered bullets can be used to communicate an emphasized sense of sequence. Custom Ordered Lists follow the same recursion rules as Unordered Lists above. They utilize styled typography and automatic numbering.</p>
                            <h4>Simple <small>(<code>ol.custom</code>)</small></h4>
                            <ol class="custom">
                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                <li>List Item</li>
                                <li>Nested Unordered:
                                    <ul>
                                        <li>Nested List Item
                                            <ol>
                                                <li>Nested Ordered List Item</li>
                                                <li>Nested Ordered List Item</li>
                                            </ol>
                                        </li>
                                        <li>Nested List Item</li>
                                    </ul>
                                </li>
                                <li>List Item</li>
                            </ol>
                            <h4>Recursive <small>(<code>ol.custom.recursive</code>)</small></h4>
                            <ol class="custom recursive">
                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae.</li>
                                <li>List Item</li>
                                <li>Nested Unordered:
                                    <ul>
                                        <li>Nested List Item
                                            <ol>
                                                <li>Nested Ordered List Item</li>
                                                <li>Nested Ordered List Item</li>
                                            </ol>
                                        </li>
                                        <li>Nested List Item</li>
                                    </ul>
                                </li>
                                <li>List Item</li>
                            </ol>
                            <h4>Inline <small>(<code>ol.custom.inline</code>)</small></h4>
                            <ol class="custom inline">
                                <li>List item ipsum dolor sit amet</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                            </ol>
                            <h4>Large <small>(<code>ol.custom.large</code>)</small></h4>
                            <ol class="custom large">
                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae adipiscing elit.</li>
                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae adipiscing elit.</li>
                                <li>List item ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam fermentum lacus, ut sagittis dui porttitor vitae adipiscing elit.</li>
                            </ol>

                            <aside>
                                <p><strong class="tutorial tip">Hint:</strong> Using different fonts and sizes maybe require adjustments to the numbered bullet properties. Be especially wary of fonts that use Oldstyle figures for numbers, which have varying heights and alignments, making them unsuitable (e.g., Freight Text).</p>
                            </aside>

                        </section>

                        <section class="dom-hidden">
                            <h2>Lists as Menus</h2>
                            <p>The <code>.list-menu</code> system quickly removes bullets and adjusts the layout of list items to fit many common use-cases.<!--  This system is also used as the foundation for the <strong>section navigation</strong> appearing in the <strong class="tutorial">Priority Sidebar</strong> above. --></p>

                            <h3>Basic</h3>
                            <h4>List Menu <small>(<code>ul.list-menu</code>)</small></h4>
                            <ul class="list-menu">
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Admissions</a></li>
                                <li><a href="#">Teaching & Research</a></li>
                                <li><a href="#">News & Events</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <h4>Vertical List Menu <small>(<code>ul.list-menu.vertical</code>)</small></h4>
                            <ul class="list-menu vertical">
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Admissions</a></li>
                                <li><a href="#">Teaching & Research</a></li>
                                <li><a href="#">News & Events</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                            <h3>With Dividers</h3>
                            <h4>List Menu <small>(<code>ul.list-menu.divs</code>)</small></h4>
                            <ul class="list-menu divs">
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Admissions</a></li>
                                <li><a href="#">Teaching & Research</a></li>
                                <li><a href="#">News & Events</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <h4>Vertical List Menu <small>(<code>ul.list-menu.vertical.divs</code>)</small></h4>
                            <ul class="list-menu vertical divs">
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Admissions</a></li>
                                <li><a href="#">Teaching & Research</a></li>
                                <li><a href="#">News & Events</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                            <h3>With Button Links</h3>
                            <h4>List Menu <small>(<code>ul.list-menu.links</code>)</small></h4>
                            <ul class="list-menu links">
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Admissions</a></li>
                                <li><a href="#">Teaching & Research</a></li>
                                <li><a href="#">News & Events</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <h4>Vertical List Menu <small>(<code>ul.list-menu.vertical.links</code>)</small></h4>
                            <ul class="list-menu vertical links">
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Admissions</a></li>
                                <li><a href="#">Teaching & Research</a></li>
                                <li><a href="#">News & Events</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                            <aside><strong class="tutorial tip">Hint:</strong> <code>.list-menu</code> classes can be used on either unordered or ordered lists with the same result. Use whichever tag best fits the content semantically.</aside>

                        </section>

                        <section>
                            <h2>Tables</h2>
                            <p>
                                <s>To minimize incompatibility with other table-based functionality, custom styles are only applied to tables which include a <code>.table</code></s> class. While options are included for borderless tables, a cell border will always be included when printed, since background colors are commonly omitted when printing from a web browser.
                            </p>
                            <aside><strong class="tutorial note">Note:</strong> Accessible data tables should include <code>&lt;caption&gt;</code> tags and properly identified and scoped headers for columns and rows (e.g., <code>&lt;th scope="col"&gt;</code>). Some styles also expect the scope attribute to be present, and may not work without it.</aside>
                            <h3>CSS Class Options <small><code>TABLE<strong>.class</strong></code></small></h3>
                            <ul class="list-menu vertical">
                                <li><s><code>.table</code> - <span class="smallprint">The base class needed to activate custom styles. Nothing below will work without it.</span></s></li>
                                <li><code>.bordered</code> - <span class="smallprint">Activates full bordering on all table cells for a traditional spreadsheet look (mutually exclusive with .flat).</span></li>
                                <li><code>.flat</code> - <span class="smallprint">Removes all borders, relying instead on subtle tinting (mutually exclusive with .bordered).</span></li>
                                <li><code>.striped</code> - <span class="smallprint">Applies an alternating row tint for easier readability. This option can be paired with all other options (bordered, flat, colored, etc).</span></li>
                                <li><code>.colored</code> - <span class="smallprint">Applies a subtle blue color palette with gray row headers. Lookin sharp!</span></li>
                                <li><code>.rainbow</code> - <span class="smallprint">Applies a not-so-subtle multi-color palette in which columns cycle through five colors for easier differentiation. While a bit whimsical in its default appearance, it can provide a model by which the <code>:nth-child</code> configuration is altered to communicate a data relationship by grouping columns together visually (e.g., the first two columns might be blue and have a shared header, the next three are white with simple table data, and the last is yellow differentiating it somehow from the nearby white columns).</span></li>
                                <li><s><code>.compact</code> - <span class="smallprint">Lessens the font size and padding of table cells, allowing slightly more data to fit the space.</span></s></li>
                                <li><code>.sectioned</code> - <span class="smallprint">If multiple <code>&lt;tbody&gt;</code> tags are used, this class creates a visual gap between them. The practical use of this is to break a table into sections <em>visually</em> without needing to use multiple tables.</span></li>
                            </ul>
                            <h3>Examples</h3>
                            <table>
                                <caption>Basic Table</caption>
                                <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 3</th>
                                    <td>R3 C1</td>
                                    <td>R3 C2</td>
                                    <td>R3 C3</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="bordered">
                                <caption>Bordered Table (<code>.bordered</code>)</caption>
                                <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 3</th>
                                    <td>R3 C1</td>
                                    <td>R3 C2</td>
                                    <td>R3 C3</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="flat">
                                <caption>Flat Table (<code>.flat</code>)</caption>
                                <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 3</th>
                                    <td>R3 C1</td>
                                    <td>R3 C2</td>
                                    <td>R3 C3</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="striped">
                                <caption>Striped Table (<code>.striped</code>)</caption>
                                <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 3</th>
                                    <td>R3 C1</td>
                                    <td>R3 C2</td>
                                    <td>R3 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 4</th>
                                    <td>R4 C1</td>
                                    <td>R4 C2</td>
                                    <td>R4 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 5</th>
                                    <td>R5 C1</td>
                                    <td>R5 C2</td>
                                    <td>R5 C3</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="flat striped">
                                <caption>Striped Table (<code>.flat.striped</code>)</caption>
                                <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 3</th>
                                    <td>R3 C1</td>
                                    <td>R3 C2</td>
                                    <td>R3 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 4</th>
                                    <td>R4 C1</td>
                                    <td>R4 C2</td>
                                    <td>R4 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 5</th>
                                    <td>R5 C1</td>
                                    <td>R5 C2</td>
                                    <td>R5 C3</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="striped colored">
                                <caption>Colored Table (<code>.striped.colored</code>)</caption>
                                <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 3</th>
                                    <td>R3 C1</td>
                                    <td>R3 C2</td>
                                    <td>R3 C3</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="flat striped colored">
                                <caption>Flat + Colored Table (<code>.flat.striped.colored</code>)</caption>
                                <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 3</th>
                                    <td>R3 C1</td>
                                    <td>R3 C2</td>
                                    <td>R3 C3</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="striped rainbow">
                                <caption>Rainbow Table. It's fun! (<code>.striped.rainbow</code>)</caption>
                                <thead>
                                <tr>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                    <th scope="col">Col 4</th>
                                    <th scope="col">Col 5</th>
                                    <th scope="col">Col 6</th>
                                    <th scope="col">Col 7</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                    <td>R1 C4</td>
                                    <td>R1 C5</td>
                                    <td>R1 C6</td>
                                    <td>R1 C7</td>
                                </tr>
                                <tr>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                    <td>R2 C4</td>
                                    <td>R2 C5</td>
                                    <td>R2 C6</td>
                                    <td>R2 C7</td>
                                </tr>
                                <tr>
                                    <td>R3 C1</td>
                                    <td>R3 C2</td>
                                    <td>R3 C3</td>
                                    <td>R3 C4</td>
                                    <td>R3 C5</td>
                                    <td>R3 C6</td>
                                    <td>R3 C7</td>
                                </tr>
                                <tr>
                                    <td>R4 C1</td>
                                    <td>R4 C2</td>
                                    <td>R4 C3</td>
                                    <td>R4 C4</td>
                                    <td>R4 C5</td>
                                    <td>R4 C6</td>
                                    <td>R4 C7</td>
                                </tr>
                                <tr>
                                    <td>R5 C1</td>
                                    <td>R5 C2</td>
                                    <td>R5 C3</td>
                                    <td>R5 C4</td>
                                    <td>R5 C5</td>
                                    <td>R5 C6</td>
                                    <td>R5 C7</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="flat striped rainbow">
                                <caption>Flat Rainbow Table with Row Headers (<code>.flat.striped.rainbow</code>)</caption>
                                <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                    <th scope="col">Col 4</th>
                                    <th scope="col">Col 5</th>
                                    <th scope="col">Col 6</th>
                                    <th scope="col">Col 7</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                    <td>R1 C4</td>
                                    <td>R1 C5</td>
                                    <td>R1 C6</td>
                                    <td>R1 C7</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                    <td>R2 C4</td>
                                    <td>R2 C5</td>
                                    <td>R2 C6</td>
                                    <td>R2 C7</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 3</th>
                                    <td>R3 C1</td>
                                    <td>R3 C2</td>
                                    <td>R3 C3</td>
                                    <td>R3 C4</td>
                                    <td>R3 C5</td>
                                    <td>R3 C6</td>
                                    <td>R3 C7</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 4</th>
                                    <td>R4 C1</td>
                                    <td>R4 C2</td>
                                    <td>R4 C3</td>
                                    <td>R4 C4</td>
                                    <td>R4 C5</td>
                                    <td>R4 C6</td>
                                    <td>R4 C7</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 5</th>
                                    <td>R5 C1</td>
                                    <td>R5 C2</td>
                                    <td>R5 C3</td>
                                    <td>R5 C4</td>
                                    <td>R5 C5</td>
                                    <td>R5 C6</td>
                                    <td>R5 C7</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="bordered">
                                <caption>Table with Nested Column and Row Headings</caption>
                                <thead>
                                <tr>
                                    <th colspan="2" rowspan="2"></th>
                                    <th rowspan="2" scope="col">Col 1</th>
                                    <th colspan="2" scope="col" class="text-center">Col 2</th>
                                </tr>
                                <tr>
                                    <th scope="col">Col 2a</th>
                                    <th scope="col">Col 2b</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th rowspan="2" scope="row">Row 1</th>
                                    <th scope="row">Row 1a</th>
                                    <td>R1a C1</td>
                                    <td>R1a C2a</td>
                                    <td>R1a C2b</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 1b</th>
                                    <td>R1b C1</td>
                                    <td>R1b C2a</td>
                                    <td>R1b C2b</td>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2a</td>
                                    <td>R2 C2b</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="flat striped colored sectioned">
                                <caption>Table with a <code>&lt;thead&gt;</code> and Multiple <code>&lt;tbody&gt;</code> Tags (add <code>.sectioned</code> to activate spacing)</caption>
                                <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Col 1</th>
                                    <th scope="col">Col 2</th>
                                    <th scope="col">Col 3</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th scope="row">Row 1</th>
                                    <td>R1 C1</td>
                                    <td>R1 C2</td>
                                    <td>R1 C3</td>
                                </tr>
                                <tr>
                                    <th scope="row">Row 2</th>
                                    <td>R2 C1</td>
                                    <td>R2 C2</td>
                                    <td>R2 C3</td>
                                </tr>
                                </tbody>
                            </table>

                        </section>

                        <section>
                            <h2>Columns and Grid System</h2>
                            <p>You can apply a <code>.two-col</code>, <code>.three-col</code>, or <code>.four-col</code> class to most containers, to distribute their direct child nodes evenly in two, three, or four simple columns. This is the easiest way to render columns without the need for special HTML markup. Rows are maintained even when nodes are different heights (as seen in the Four Column example below).</p>
                            <h3>Two Even Columns</h3>
                            <div class="two-col">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                            </div>
                            <h3>Three Even Columns</h3>
                            <div class="three-col">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                            </div>
                            <h3>Four Even Columns</h3>
                            <div class="four-col">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                                <img src="images/photos/plantations_square.jpg" width="375" height="375" alt="Cornell Plantations">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                                <img src="images/photos/plantations_square.jpg" width="375" height="375" alt="Cornell Plantations">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                                <img src="images/photos/plantations_square.jpg" width="375" height="375" alt="Cornell Plantations">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                            </div>
                            <h3>Columns with Padding <small>(<code>.padded</code>)</small></h3>
                            <p>Add a <code>.padded</code> class to any of the above options to include a gap (gutter) between columns.</p>
                            <div class="three-col padded">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                                <img src="images/photos/plantations.jpg" width="375" height="250" alt="Cornell Plantations">
                            </div>
                            <div class="two-col padded">
                                <div>Column one lorem ipsum dolor sit amet, amet eu hic, arcu at eros, odio sed vel ante morbi at aenean, eget leo donec turpis ligula. Felis vehicula, lacinia sed mauris, fusce accumsan adipiscing in id proin ullamcorper, enim ac arcu sed amet.</div>
                                <div>Column two lorem ipsum dolor sit amet, amet eu hic, arcu at eros, odio sed vel ante morbi at aenean, eget leo donec turpis ligula. Felis vehicula, lacinia sed mauris, fusce accumsan adipiscing in id proin ullamcorper, enim ac arcu sed amet.</div>
                            </div>

                            <h3>Flexbox Grid <small>(<code>.flex-grid</code>)</small></h3>
                            <p>A 12-column flexbox-based grid is also available for more advanced layouts. Applying the <code>.flex-grid</code> class to a container will activate flexbox behavior and unlock column sizes of 1 to 12 for direct children (<code>.flex-*</code>). For example, a <code>.flex-3</code> class applies a width of 25% (3/12) to the grid item, while <code>.flex-4</code> applies a width of ~33.3% (4/12).</p>
                            <h4 class="quarter-margin">Notes/Behaviors</h4>
                            <ul class="custom chevrons smallprint">
                                <li>Grid items will display in a single column on mobile. To better accomodate a wide range of layouts (especially forms), the breakpoint at which the <code>.flex-grid</code> activates is <code>834px</code>. Note that this is higher than the more common <code>768px</code> used by other responsive layouts in the CSS Framework. Additionally, <code>.flex-grid</code> layouts inside a <code>&lt;form&gt;</code> tag will not activate until <code>1024px</code> since form elements are more sensitive to space contraints.</li>
                                <li>For modern browsers, a container query is used to apply an additional constraint, allowing the grid to activate sooner in full-width regions and later in smaller regions (such as when a sidebar is present).</li>
                                <li>A <code>.flex-12</code> class is not needed to apply 100% width. Grid items will display at 100% width by default.</li>
                                <li>In addition to sizes of <code>.flex-1</code> through <code>.flex-11</code>, two specialty sizes are available: <code>.flex-1-5</code> (20%) and <code>.flex-1-8</code> (12.5%).</li>
                                <li>Grid items will drop to the next row if there isn't enough room for the width specified, leaving an empty space. In general, the math of each row should always add up to 12 (100%).</li>
                                <li>Horizontal Rules (<code>&lt;hr&gt;</code>) can be used as dividers between rows (an example is below).</li>
                            </ul>
                            <h4 class="quarter-margin">Container Classes</h4>
                            <ul class="list-menu vertical">
                                <li><code>.padded</code> - <span class="smallprint">Child elements have horizontal (left and right) padding by default. This class applies vertical padding to match.</span></li>
                                <li><code>.collapse-rows</code> - <span class="smallprint">This class removes the vertical margin between rows.</span></li>
                                <li><code>.compact-rows</code> - <span class="smallprint">This class greatly reduces the vertical margin between rows.</span></li>
                                <li><code>.collapse-cols</code> - <span class="smallprint">This class removes the horizontal padding (effectively the margin) between child elements.</span></li>

                            </ul>
                            <p>In many of the example below, the <code>.demo-mode</code> class is used only to outline and color-tint cells for easier viewing and testing, and should be removed once grids are configured.</p>


                            <h4>Basic Column Grids</h4>
                            <div class="flex-grid demo-mode">
                                <div class="flex-3">3/12</div>
                                <div class="flex-9">9/12</div>
                            </div>
                            <div class="flex-grid demo-mode">
                                <div class="flex-2">2/12</div>
                                <div class="flex-8">8/12</div>
                                <div class="flex-2">2/12</div>
                            </div>
                            <div class="flex-grid demo-mode">
                                <div class="flex-1-5">1/5</div>
                                <div class="flex-1-5">1/5</div>
                                <div class="flex-1-5">1/5</div>
                                <div class="flex-1-5">1/5</div>
                                <div class="flex-1-5">1/5</div>
                            </div>
                            <div class="flex-grid demo-mode">
                                <div class="flex-1-8">1/8</div>
                                <div class="flex-1-8">1/8</div>
                                <div class="flex-1-8">1/8</div>
                                <div class="flex-1-8">1/8</div>
                                <div class="flex-1-8">1/8</div>
                                <div class="flex-1-8">1/8</div>
                                <div class="flex-1-8">1/8</div>
                                <div class="flex-1-8">1/8</div>
                            </div>
                            <div class="flex-grid demo-mode">
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                                <div class="flex-2">2/12</div>
                            </div>
                            <h4>Nested</h4>
                            <div class="flex-grid demo-mode">
                                <div class="flex-3">3/12</div>
                                <div class="flex-9">
                                    <div class="flex-grid demo-mode collapse-rows">
                                        <div class="flex-6">6/12 Nested</div>
                                        <div class="flex-6">6/12 Nested</div>
                                        <div class="flex-12">12/12 Nested</div>
                                    </div>
                                </div>
                            </div>

                            <hr class="invisible">
                            <h4>Collapse Rows</h4>
                            <div class="flex-grid demo-mode collapse-rows">
                                <div class="flex-2">
                                    <p>.flex-2</p>
                                </div>
                                <div class="flex-7">
                                    <p>.flex-7</p>
                                </div>
                                <div class="flex-3">
                                    <p>.flex-3</p>
                                </div>
                                <div class="flex-5">
                                    <p>.flex-5</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-4">
                                    <p>.flex-4</p>
                                </div>
                            </div>

                            <hr class="invisible">
                            <h4>Compact Rows</h4>
                            <div class="flex-grid demo-mode compact-rows">
                                <div class="flex-2">
                                    <p>.flex-2</p>
                                </div>
                                <div class="flex-7">
                                    <p>.flex-7</p>
                                </div>
                                <div class="flex-3">
                                    <p>.flex-3</p>
                                </div>
                                <div class="flex-5">
                                    <p>.flex-5</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-4">
                                    <p>.flex-4</p>
                                </div>
                            </div>

                            <hr class="invisible">
                            <h4>Collapse Rows and Padded</h4>
                            <div class="flex-grid demo-mode collapse-rows padded">
                                <div class="flex-2">
                                    <p>.flex-2</p>
                                </div>
                                <div class="flex-7">
                                    <p>.flex-7</p>
                                </div>
                                <div class="flex-3">
                                    <p>.flex-3</p>
                                </div>
                                <div class="flex-5">
                                    <p>.flex-5</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-4">
                                    <p>.flex-4</p>
                                </div>
                            </div>

                            <hr class="invisible">
                            <h4>Collapse Rows and Columns</h4>
                            <div class="flex-grid demo-mode collapse-rows collapse-cols">
                                <div class="flex-2">
                                    <p>.flex-2</p>
                                </div>
                                <div class="flex-7">
                                    <p>.flex-7</p>
                                </div>
                                <div class="flex-3">
                                    <p>.flex-3</p>
                                </div>
                                <div class="flex-5">
                                    <p>.flex-5</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-1">
                                    <p>.flex-1</p>
                                </div>
                                <div class="flex-4">
                                    <p>.flex-4</p>
                                </div>
                            </div>

                            <hr class="invisible">
                            <h4>Grid with <code>&lt;hr&gt;</code> Dividers</h4>
                            <div class="flex-grid">
                                <div class="flex-3">
                                    <p>.flex-3</p>
                                </div>
                                <div class="flex-3">
                                    <p>.flex-3</p>
                                </div>
                                <div class="flex-3">
                                    <p>.flex-3</p>
                                </div>
                                <div class="flex-3">
                                    <p>.flex-3</p>
                                </div>
                                <hr>
                                <div class="flex-4">
                                    <p>.flex-4</p>
                                </div>
                                <div class="flex-4">
                                    <p>.flex-4</p>
                                </div>
                                <div class="flex-4">
                                    <p>.flex-4</p>
                                </div>
                            </div>

                            <hr class="invisible">
                            <h4>Grid with Panels</h4>
                            <div class="flex-grid">
                                <div class="flex-3">
                                    <div class="panel">.flex-3</div>
                                </div>
                                <div class="flex-3">
                                    <div class="panel">.flex-3</div>
                                </div>
                                <div class="flex-3">
                                    <div class="panel">.flex-3</div>
                                </div>
                                <div class="flex-3">
                                    <div class="panel">.flex-3</div>
                                </div>
                                <div class="flex-3">
                                    <div class="panel accent-green no-border">.flex-3</div>
                                </div>
                                <div class="flex-3">
                                    <div class="panel accent-teal no-border">.flex-3</div>
                                </div>
                                <div class="flex-3">
                                    <div class="panel accent-red no-border">.flex-3</div>
                                </div>
                                <div class="flex-3">
                                    <div class="panel accent-purple no-border">.flex-3</div>
                                </div>
                            </div>

                            <hr class="invisible">
                            <h4>Forms</h4>
                            <p>The <code>.flex-grid</code> also works well for forms, but it's important to be mindful of label and description lengths, to ensure they will fit the space provided at all screen sizes. More information is available on the <a href="forms.html">forms documentation</a> page.</p>
                            <form>
                                <div class="flex-grid">
                                    <div class="form-item flex-2">
                                        <label for="cell_prefix">Country Code</label>
                                        <input type="text" name="cell_prefix" id="cell_prefix" value="" size="8" aria-describedby="cell_prefix_desc">
                                        <div class="description" id="cell_prefix_desc">Description</div>
                                    </div>

                                    <div class="form-item flex-7">
                                        <label for="cell_number">Phone Number</label>
                                        <input type="text" id="cell_number" name="cell_number" value="" size="32" aria-describedby="cell_number_desc">
                                        <div class="description" id="cell_number_desc">Description</div>
                                    </div>

                                    <div class="form-item flex-3">
                                        <label for="cell_extension">Extension</label>
                                        <input type="text" name="cell_extension" id="cell_extension" value="" size="16" aria-describedby="cell_extension_desc">
                                        <div class="description" id="cell_extension_desc">Description</div>
                                    </div>
                                </div>
                            </form>


                        </section>

                        <footer>
                            <h2 class="h5 puretext">Article Footer</h2>
                            This content appears at the bottom of the main <code>article</code>. It could hold <strong class="tutorial">footnotes</strong>, <strong class="tutorial">references</strong>, <strong class="tutorial">author info</strong>, or other metadata.
                        </footer>




                        <hr class="section-break">



                        <section>
                            <h1>Custom Forms</h1>
                            <p class="intro">Basic Form Styles and Layout</p>
                            <p>Basic Forms (no class needed). Standardized around single column with label on top. flexbox system for .form-item divs being side-by side on larger screens. form.compact option will use smaller labels and description text. However, field inputs will remain at 16px at phone size, to ensure that they do not zoom on iPhones. By default, form fields and their associate labels and descriptions will fill all available width. <mark class="text-highlight-yellow">form.no-constrain option lifts this limit limits these elements to 600px maximum width, which may be desirable in some cases where fields being wider than this will begin to lose their "field" appearance to the visitor's eyes.</mark></p>
                            <p>Fieldset classes: .semantic (affects visual of fieldset and any legend within). Form-item and form-actions, class option: .form-item.tint, .description, .option-label for checkboxes and radios (put it after the checkbox and before the radio (but that doesn't seem right?), label + input + div.description pattern, .use-size-attr option</p>
                            <p>Flexbox system (include div.flex-grid as container for form-items and form-actions). By default, it won't change anything unless the form-items have classes added for a 12-column grid (.flex-1, flex-2, flex-3, etc up to .flex-12 (which is the default 100%)). Since it's not feasible to predict the ideal way to break the grid down in stages, the grid will simply drop to single column at subtablet size. Note: If using a grid layout, especially one with small units, there won't be space for long labels or description text for each field. Fields should generally only be displayed side-by-side if they have a strong thematic link (such as segments of a phone number) so that a single description can apply to the set. It's also probably best not to use a unit below 3.</p>
                            <p>Forms use the standard flex-grid system except that the switch to single column happens sooner (</p>
                            <p>If you want to provide a thematic break between fields or groups of fields, you can use an HR tag between .form-item divs (or .form-actions). This will also work inside of a flex-grid.</p>

                            <aside>
                                <p><strong class="tutorial">Accessibility:</strong> Consider using the following <a href="http://www.w3.org/WAI/intro/aria.php">ARIA</a> attributes (demonstrated in context below) for the following cases:</p>
                                <ol>
                                    <li><code>aria-invalid</code> - mark fields that have failed validation</li>
                                    <li><code>aria-required</code> - mark fields that are required</li>
                                    <li><code>role="dialog"</code> - mark containers that act as an application dialog, with content separate from the main page</li>
                                    <li><code>aria-labelledby</code> - can be paired with a <code>role=dialog</code> to define its title</li>
                                    <li><code>aria-describedby</code> - can be paired a <code>role=dialog</code> to define its description</li>
                                </ol>
                                <p>Be mindful that accessibility can sometimes also require careful control of keyboard focus with JavaScript (such as moving focus to and from dialogs (especially modal dialogs) or providing shortcuts to fields with errors).</p>
                            </aside>
                        </section>

                        <section>
                            <h2>Fieldsets</h2>
                            <p>The <code>&lt;fieldset&gt;</code> tag can be used to group fields which are thematically related. By default, the relationship is also represented visually, as seen throughout this page. Fieldsets must include a <code>&lt;legend&gt;</code> tag, which acts as a caption to describe the fields' relationship. More details on fieldset legends can be found below.</p>
                            <h3>Default</h3>
                            <form>
                                <fieldset>
                                    <legend>The fieldset is outlined in a light border by default, with a visible legend on the top line.</legend>
                                    <label for="sample1" class="sr-only">Sample Input</label>
                                    <input type="text" name="sample1" id="sample1" value="" placeholder="Form content is outlined by the fieldset.">
                                </fieldset>
                            </form>
                            <hr class="invisible">
                            <h3>Semantic <small>(<code>.semantic</code>)</small></h3>
                            <form>
                                <fieldset class="semantic">
                                    <legend>The semantic fieldset displays its legend more like a heading.</legend>
                                    <label for="sample2" class="sr-only">Sample Input</label>
                                    <input type="text" name="sample2" id="sample2" value="" placeholder="Form content has no outline, but appears below the legend.">
                                </fieldset>
                            </form>
                            <hr class="invisible">
                            <h3>Fieldset Legends</h3>
                            <aside class="serif"><span class="accent-decorative">I</span><span class="bigred">t is said</span> that the first Fieldsets roamed the Earth before written history, protecting early human civilization and bringing health and good fortune to all whom they encountered... perhaps this is why their <code>&lt;legend&gt;</code> tags persist to this day.</aside>
                            <p>Legends act as captions for a fieldset, helping to describe the thematic grouping of fields. In general, only one <code>&lt;legend&gt;</code> tag should appear in a <code>&lt;fieldset&gt;</code>. Multiple legends can be rendered. However, only the first will be treated as the primary caption.</p>
                            <h4>Visually Hidden</h4>
                            <p>While legends are optional in HTML5, they are required for WCAG 2.0 compliance. If a legend is not needed visually, use the <code>.sr-only</code> class to make it exclusive to screen readers. Combining this with a <code>.semantic</code> fieldset will allow you to use fieldsets with no visual representation, which is appropriate in many cases.</p>
                            <form>
                                <fieldset>
                                    <legend class="sr-only">This legend is read by screen readers, but should not be visible.</legend>
                                    <label for="sample3" class="sr-only">Sample Input</label>
                                    <input type="text" name="sample3" id="sample3" value="" placeholder="The legend for this default fieldset is visually hidden.">
                                </fieldset>
                            </form>
                            <form>
                                <fieldset class="semantic">
                                    <legend class="sr-only">This legend is read by screen readers, but should not be visible.</legend>
                                    <label for="sample4" class="sr-only">Sample Input</label>
                                    <input type="text" name="sample4" id="sample4" value="" placeholder="The legend for this semantic fieldset is visually hidden.">
                                </fieldset>
                            </form>

                            <hr class="invisible">
                            <h3>Nested Fieldsets</h3>
                            <p>Nested fieldsets are supported but should be avoided if possible for easier accessibility. It may be a valid approach in some cases, however, such as organizing exceptionally complex forms.</p>
                            <form>
                                <fieldset>
                                    <legend>The fieldset is outlined in a light border by default, with a visible legend on the top line.</legend>
                                    <label for="sample5">Sample Input</label>
                                    <input type="text" name="sample5" id="sample5" value="" placeholder="Form content is outlined by the fieldset.">

                                    <fieldset>
                                        <legend>This fieldset is nested 1 level.</legend>
                                        <label for="sample5b">Sample Input</label>
                                        <input type="text" name="sample5b" id="sample5b" value="">

                                        <fieldset>
                                            <legend>This fieldset is nested 2 levels. It should look the same as level 1.</legend>
                                            <label for="sample5c">Sample Input</label>
                                            <input type="text" name="sample5c" id="sample5c" value="">
                                            <label for="sample5d">Sample Input</label>
                                            <input type="text" name="sample5d" id="sample5d" value="">
                                        </fieldset>
                                    </fieldset>
                                </fieldset>
                            </form>
                            <hr class="invisible">
                            <form>
                                <fieldset class="semantic">
                                    <legend>The semantic fieldset displays its legend more like a heading.</legend>
                                    <label for="sample6">Sample Input</label>
                                    <input type="text" name="sample2" id="sample6" value="" placeholder="Form content has no outline, but appears below the legend.">

                                    <fieldset>
                                        <legend>This fieldset is nested 1 level.</legend>
                                        <label for="sample6b">Sample Input</label>
                                        <input type="text" name="sample6b" id="sample6b" value="">

                                        <fieldset>
                                            <legend>This fieldset is nested 2 levels. It should looks the same as level 1.</legend>
                                            <label for="sample6c">Sample Input</label>
                                            <input type="text" name="sample6c" id="sample6c" value="">
                                            <label for="sample6d">Sample Input</label>
                                            <input type="text" name="sample6d" id="sample6d" value="">
                                        </fieldset>
                                    </fieldset>
                                </fieldset>
                            </form>

                            <hr class="invisible">
                            <h3>Tips for Nerds</h3>
                            <aside>

                                <ul class="custom nerd">
                                    <li>
                                        <h3 class="h5 half-margin">When using the <code>&lt;fieldset&gt;</code> tag, try to avoid wrapping a very long series of fields in a single fieldset.</h3>
                                        <p class="smallprint full-margin">When printing, Firefox treats the fieldset tag (along with a few others like <code>&lt;table&gt;</code>) in a problematic manner. It tries, above all else, to fit a fieldset onto a single page (rather than dividing it across multiple pages). If the fieldset is quite tall, it will often skip to the start of the next page before starting to print it (potentially leaving a large gap on the previous page). Furthermore, if the fieldset is simply too long to fit on a single page, it may truncate it.</p>
                                    </li>
                                    <li>
                                        <h3 class="h5 half-margin">Screen Reader Behavior</h3>
                                        <p class="smallprint">In some cases, screen readers may treat fieldsets differently, based on the presence or absence of a legend. For example, macOS Voiceover will treat fieldsets with legends as "groups," announcing the fieldset as a content group, and reading the legend as its label. The user can then choose to interact with this group or skip to the next. Conversely, fieldsets without legends have no effect on document flow. Voiceover will advance through the labels and fields in the same manner as if no fieldset was present.</p>
                                    </li>
                                </ul>
                            </aside>

                        </section>
                        <section>
                            <h2>Form Inputs</h2>
                            <p>Inputs, Textareas, and Selects (along with their labels and description boxes) will generally fill the width of their container by default, but with a maximum width of 600px. This 600px limit can be bypassed by including a <code>.no-constrain</code> class on the <code>&lt;form&gt;</code> tag. Use the <code>.native-size</code> class on an individual input (or a whole <code>&lt;form&gt;</code>) to override fluid sizing entirely and honor HTML-defined size attributes. This should be used with caution, since attributes like <code>size</code> and <code>cols</code> can override max-width constraints.</p>

                            <h3>Basic Text</h3>
                            <form>
                                <fieldset class="semantic">
                                    <legend class="sr-only">This legend is read by screen readers, but should not be visible.</legend>

                                    <label for="field1">Text Input</label>
                                    <input type="text" id="field1" name="field1" size="32" placeholder="default (full-width)">
                                    <label for="field1b">Text Input (with <code>.native-size</code> class)</label>
                                    <input type="text" class="native-size" id="field1b" name="field1b" size="32" placeholder="honors the 'size' attribute">
                                    <label for="field1c">Text Input with Description</label>
                                    <input type="text" id="field1c" name="field1c" size="32" placeholder="use 'aria-describedby' on the input to reference the description ID" aria-describedby="field1c_desc">
                                    <div class="description" id="field1c_desc">This description text provides additional instruction or formatting hints.</div>
                                    <label for="textarea1">Text Area</label>
                                    <textarea id="textarea1" name="textarea1" rows="4" cols="50" aria-describedby="textarea1_desc"></textarea>
                                    <div class="description" id="textarea1_desc">The <code>rows</code> attribute will always be honored when present. If no <code>rows</code> is defined, the textarea will display roughly 4 rows. As a safeguard, the <code>cols</code> attributes will only be honored if the<code>.native-size</code> class is also present.</div>
                                </fieldset>
                            </form>

                            <hr class="invisible">
                            <h3>Specialty Text</h3>
                            <p class="smallprint">By default, specialty text fields mimic the look and behavior of basic text fields. However, the optional <code>.icon</code> class on an input will add a thematic background icon.</p>
                            <form>
                                <fieldset class="semantic">
                                    <legend class="sr-only">This legend is read by screen readers, but should not be visible.</legend>

                                    <label for="field6">Search Input</label>
                                    <input type="search" id="field6" name="field6" placeholder="Search" class="icon">

                                    <label for="field7">Telephone Input</label>
                                    <input type="tel" id="field7" name="field7" class="icon">

                                    <label for="field8">URL Input</label>
                                    <input type="url" id="field8" name="field8" class="icon">

                                    <label for="field9">Email Input</label>
                                    <input type="email" id="field9" name="field9" class="icon">

                                    <label for="field10">Password Input</label>
                                    <input type="password" id="field10" name="field10" class="icon">
                                </fieldset>
                            </form>

                            <hr class="invisible">
                            <h3>Functional Inputs</h3>
                            <p class="smallprint">The functionality of these input types is browser/device-specific. In many cases, they have no special functionality at all (but may in the future). In general, when a browser does not support special functionality for these fields, it will behave as a standard text field. However, in some cases, a field may not be supported at all (e.g., at the time of this writing, iOS has trouble with the Week input). To minimize compatibility issues, functional inputs are styled a bit more lightly than other text inputs. They will be roughly the same size, but will allow more device-specific design to come through. These esoteric fields should be used with care (and testing!).</p>
                            <form>
                                <fieldset class="semantic">
                                    <legend class="sr-only">This legend is read by screen readers, but should not be visible.</legend>

                                    <label for="field11">Number Input</label>
                                    <input type="number" id="field11" name="field11" step="1" max="20" min="-20">

                                    <label for="field12">Datetime Input</label>
                                    <input type="datetime" id="field12" name="field12">

                                    <label for="field13">Datetime Local Input</label>
                                    <input type="datetime-local" id="field13" name="field13">

                                    <label for="field14">Date Input</label>
                                    <input type="date" id="field14" name="field14">

                                    <label for="field15">Month Input</label>
                                    <input type="month" id="field15" name="field15">

                                    <label for="field16">Week Input</label>
                                    <input type="week" id="field16" name="field16">

                                    <label for="field17">Time Input</label>
                                    <input type="time" id="field17" name="field17">

                                    <label for="field18">Range Input</label>
                                    <input type="range" id="field18" name="field18" min="0" max="100" value="70" step="10">

                                    <label for="field19">File Input</label>
                                    <input type="file" id="field19" name="field19" accept="image/png, image/jpeg">

                                    <label for="field20">Color Input</label>
                                    <input type="color" id="field20" name="field20" value="#b31b1b">

                                </fieldset>
                            </form>

                            <hr class="invisible">
                            <h3>Checkboxes</h3>
                            <p class="smallprint"><mark class="text-highlight-yellow">Notes about browser considerations and use of .option-label/.description/.form-item, checkboxes are toggled on and off independently, multiple checkboxes grouped in a set can be selected, radio buttons are grouped into a set in which only one can be selected at a time</mark></p>
                            <form>
                                <fieldset class="semantic">
                                    <legend class="sr-only">This legend is read by screen readers, but should not be visible.</legend>

                                    <h4 class="no-margin">Single Checkboxes</h4>
                                    <p class="smallprint">Two approaches to pairing a single checkbox with its labeling:</p>
                                    <div class="form-item">
                                        <label for="field21">Overarching Label</label>
                                        <input type="checkbox" id="field21" name="field21" aria-describedby="field21_desc" checked="">
                                        <span class="option-label" id="field21_desc">This checkbox has an overarching label as well as a longer, inline description.</span>
                                    </div>

                                    <div class="form-item">
                                        <input type="checkbox" id="field22" name="field22" aria-describedby="field22_desc" checked="">
                                        <label class="option-label" for="field22">This checkbox uses an inline label (which is therefore clickable!).</label>
                                        <div class="description" id="field22_desc">It can optionally include a longer description underneath.</div>
                                    </div>

                                    <hr>
                                    <h4 class="no-margin">A Plethora of Checkboxes</h4>
                                    <p class="smallprint">A grouped set of checkboxes sharing the same <code>name</code> attribute and <code>.mini</code> sizing:</p>

                                    <div class="flex-grid compact-rows mini">
                                        <div class="form-item">
                                            <input type="checkbox" id="field23" name="checkbox-set1" checked="" value="1">
                                            <label class="option-label" for="field23">Checkbox Option One</label>
                                        </div>
                                        <div class="form-item">
                                            <input type="checkbox" id="field24" name="checkbox-set1" value="2">
                                            <label class="option-label" for="field24">Second Checkbox Option</label>
                                        </div>
                                        <div class="form-item">
                                            <input type="checkbox" id="field25" name="checkbox-set1" value="3">
                                            <label class="option-label" for="field25">Checkbox Option Three</label>
                                        </div>
                                        <div class="form-item">
                                            <input type="checkbox" id="field26" name="checkbox-set1" value="4">
                                            <label class="option-label" for="field26">Fourth Checkbox Option</label>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                            <hr class="invisible">
                            <h3>Radio Buttons</h3>
                            <p class="smallprint"><mark class="text-highlight-yellow">Notes about browser considerations and use of .option-label/.description/.form-item, checkboxes are toggled on and off independently, multiple checkboxes grouped in a set can be selected, radio buttons are grouped into a set in which only one can be selected at a time</mark></p>
                            <form>
                                <fieldset class="semantic">
                                    <legend class="sr-only">This legend is read by screen readers, but should not be visible.</legend>

                                    <h4 class="no-margin">Single Radio Button</h4>
                                    <p class="smallprint">In general, a single radio button should not be used (since it cannot be toggled back off once it has been selected). As such, a checkbox is usually the correct toggle for a single option.</p>

                                    <div class="form-item">
                                        <input type="radio" id="field27" name="field27" aria-describedby="field27_desc">
                                        <label class="option-label" for="field27">This poor radio button is lonely on its own!</label>
                                        <div class="description" id="field27_desc">You shouldn't use a radio button for a single toggle. Let's find it some friends below...</div>
                                    </div>

                                    <hr>
                                    <h4 class="no-margin">Radio Button's Crew</h4>
                                    <p class="smallprint">A grouped set of radio buttons sharing the same <code>name</code> attribute (and a similar taste in movies):</p>

                                    <div class="flex-grid compact-rows no-margin">
                                        <div class="form-item">
                                            <input type="radio" id="field28" name="radio-set1" checked="" value="1">
                                            <label class="option-label" for="field28">A Single Radio Button No More!</label>
                                        </div>
                                        <div class="form-item">
                                            <input type="radio" id="field29" name="radio-set1" value="2">
                                            <label class="option-label" for="field29">Radio Button's Friend</label>
                                        </div>
                                        <div class="form-item">
                                            <input type="radio" id="field30" name="radio-set1" value="3">
                                            <label class="option-label" for="field30">Radio Button's Friend</label>
                                        </div>
                                        <div class="form-item">
                                            <input type="radio" id="field31" name="radio-set1" value="4">
                                            <label class="option-label" for="field31">Radio Button's Friend Who Has a Car</label>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                            <hr class="invisible">
                            <h3>Select Lists</h3>
                            <p class="smallprint"><mark class="text-highlight-yellow">...</mark></p>
                            <form>
                                <fieldset class="semantic">
                                    <legend class="sr-only">This legend is read by screen readers, but should not be visible.</legend>

                                    <div class="form-item">
                                        <label for="select1">Standard Single-Select</label>
                                        <select id="select1" name="select1">
                                            <option value=""></option>
                                            <option value="1">Tone is supercool!</option>
                                            <option value="2">Tone is fabulous and always well-spoken.</option>
                                            <option value="3">Tone is a pillar of professionalism.</option>
                                            <option value="4" disabled="disabled">Or is he a little full of himself...</option>
                                            <option value="5" disabled="disabled">A menace to campus who must be stopped!</option>
                                            <option value="6" disabled="disabled">Ha! You can't select these!</option>
                                        </select>
                                    </div>
                                    <div class="form-item">
                                        <label for="select2">Single-Select with Groups</label>
                                        <select id="select2" name="select2">
                                            <option value=""></option>
                                            <optgroup label="Tone is...">
                                                <option value="1">Supercool!</option>
                                                <option value="2">Fabulous and always well-spoken.</option>
                                                <option value="3">A pillar of professionalism.</option>
                                            </optgroup>
                                            <optgroup label="Or is he..." disabled="disabled">
                                                <option value="4" disabled="disabled">A little full of himself...</option>
                                                <option value="5" disabled="disabled">A menace to campus who must be stopped!</option>
                                                <option value="6" disabled="disabled">Ha! You can't select these!</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-item">
                                        <label for="select_alt">Simple Style (<code>.simple</code>)</label>
                                        <select id="select_alt" name="select_alt" class="simple" aria-describedby="select_alt_desc">
                                            <option value=""></option>
                                            <option value="1">Tone is supercool!</option>
                                            <option value="2">Tone is fabulous and always well-spoken.</option>
                                            <option value="3">Tone is a pillar of professionalism.</option>
                                            <option value="4" disabled="disabled">Or is he a little full of himself...</option>
                                            <option value="5" disabled="disabled">A menace to campus who must be stopped!</option>
                                            <option value="6" disabled="disabled">Ha! You can't select these!</option>
                                        </select>
                                        <div class="description" id="select_alt_desc">Be careful with visual context for this style. It could be mistaken for an accordion trigger.</div>
                                    </div>
                                    <div class="form-item">
                                        <label for="select3">Multi-Select</label>
                                        <select id="select3" name="select3" size="6" multiple="multiple">
                                            <option value="1">Tone is supercool!</option>
                                            <option value="2">Tone is fabulous and always well-spoken.</option>
                                            <option value="3">Tone is a pillar of professionalism.</option>
                                            <option value="4" disabled="disabled">Or is he a little full of himself...</option>
                                            <option value="5" disabled="disabled">A menace to campus who must be stopped!</option>
                                            <option value="6" disabled="disabled">Ha! You can't select these!</option>
                                        </select>
                                    </div>
                                    <div class="form-item">
                                        <label for="select4" class="error">Multi-Select with Groups</label>
                                        <select id="select4" name="select4" size="8" multiple="multiple">
                                            <optgroup label="Tone is...">
                                                <option value="1">Supercool!</option>
                                                <option value="2">Fabulous and always well-spoken.</option>
                                                <option value="3">A pillar of professionalism.</option>
                                            </optgroup>
                                            <optgroup label="Or is he..." disabled="disabled">
                                                <option value="4" disabled="disabled">A little full of himself...</option>
                                                <option value="5" disabled="disabled">A menace to campus who must be stopped!</option>
                                                <option value="6" disabled="disabled">Ha! You can't select these!</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                </fieldset>
                            </form>

                        </section>
                        <section>
                            <h2>Flexbox Grid</h2>
                        </section>
                        <section>
                            <h2>Example Forms</h2>

                            <form id="search-all" aria-label="Search All Subscriptions" class="subscription-search">
                                <fieldset class="semantic small">
                                    <legend class="sr-only">Search by:</legend>

                                    <div class="flex">
                                        <div class="form-item">
                                            <label for="search-keyword">Keyword</label>
                                            <input id="search-keyword" name="search-keyword" type="search">
                                        </div>

                                        <div class="form-item">
                                            <label for="search-category">Category</label>
                                            <select id="search-category" name="search-category" class="simple">
                                                <option value=""></option>
                                                <option value="1">Alumni Affairs and Development</option>
                                                <option value="2">Big Red Bear's Dining Picks</option>
                                                <option value="3">Student and Campus Life Publications</option>
                                            </select>
                                        </div>

                                        <div class="form-item">
                                            <label for="search-tag">Tag</label>
                                            <select id="search-tag" name="search-tag" class="simple">
                                                <option value=""></option>
                                                <option value="1">An Example Tag One</option>
                                                <option value="2">Tag Number Two</option>
                                                <option value="3">Tag Three</option>
                                            </select>
                                        </div>

                                        <div class="form-actions">
                                            <input id="search-submit" type="submit" value="Apply">
                                            <input id="search-reset" type="reset" value="Reset" class="medium-gray">
                                            <!-- Or as buttons: -->
                                            <!-- <button id="search-submit">Apply</button> -->
                                            <!-- <button id="search-reset" class="medium-gray">Reset</button> -->
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </section>











                    </div>

                    <div class="sidebar sidebar-secondary">
                        <h2>Secondary Sidebar Content</h2>
                        <p>Aliquam et nibh nec magna pellentesque rutrum vel a quam. Nullam tempor nibh ac augue tristique pulvinar. Sed ornare pellentesque euismod.</p>
                        <h3>Receded Photo</h3>
                        <div class="spotlight">
                            <a href="#">
                                <figure>
                                    <div class="receded"><img src="images/photos/sample_photo_640.jpg" alt=""></div>
                                    <figcaption>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo.</figcaption>
                                </figure>
                            </a>
                        </div>
                        <hr class="invisible">
                        <h3>Figure in a Sidebar</h3>
                        <a href="http://blogs.cornell.edu/pawsandreflect">
                            <figure>
                                <img src="images/photos/bearhug.jpg" width="1125" height="750" alt="Homecoming Bear Hug!">
                                <figcaption>Free Hugs!</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </article>
</x-layouts.app>

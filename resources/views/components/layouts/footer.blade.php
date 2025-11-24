<footer id="site-footer" class="band dark accent-dark-gray" aria-label="Site Footer">
    <div class="band main-footer padded">
        <div class="container">
            <div class="layout layout-1-1">
                <div class="section">
                    <h2 class="h4">Footer Primary</h2>
                </div>
                <div class="section text-right" x-data x-effect="document.body.classList.toggle('dark', $flux.dark)">
                    <button class="button red bear" x-data x-on:click="$flux.dark = ! $flux.dark">
                        Toggle Dark
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="band sub-footer padded-medium">
        <div class="container">
            <div class="subfooter-links">
                <ul>
                    <li><a href="https://www.cornell.edu">Cornell University</a> ©{{ date('Y') }}</li>
                    <li><a href="https://privacy.cornell.edu/">University Privacy</a></li>
                </ul>
                <ul>
                    <li>
                        <a href="https://accessibility.cornell.edu/information-technology/web-accessibility/web-accessibility-assistance/">Web Accessibility Assistance</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

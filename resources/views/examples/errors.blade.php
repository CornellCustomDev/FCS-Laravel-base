<x-layouts.app title="CD Laravel Base" subtitle="Custom Development">
    <x-layouts.main-article>
        <div class="container"></div>
            <h1>Errors</h1>
            <p>This page is used to test error handling in the application.</p>
            <x-cds.callout-error>
                <p>Input is a required field. Please find it <a href="">here - link to input</a>.</p>
            </x-cds.callout-error>
            <x-cds.input
                label="Input with Error" name="field-error"
                error:message="This field has an error."
                invalid
            />
        </div>
    </x-layouts.main-article>
</x-layouts.app>

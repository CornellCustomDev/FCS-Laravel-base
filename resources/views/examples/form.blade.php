<x-layouts.app title="CD Laravel Base" subtitle="Custom Development">
    <article id="main-article">
        <div class="region padded">
            <div class="container">
                <div class="layout">
                    <div class="article">
                        <h1>Form Inputs</h1>

                        <p>
                            Inputs, Textareas, and Selects (along with their labels and description boxes) will generally fill the width of their container by default, but with a maximum width of 600px. This 600px limit can be bypassed by including a <code>.no-constrain</code> class on the <code>&lt;form&gt;</code> tag. Use the <code>.native-size</code> class on an individual input (or a whole <code>&lt;form&gt;</code>) to override fluid sizing entirely and honor HTML-defined size attributes. This should be used with caution, since attributes like <code>size</code> and <code>cols</code> can override max-width constraints.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="region padded-small tint">
            <div class="container container-full">
                <div class="section">
                    <h2>Basic Text</h2>
                    <flux:separator />
                </div>
                <div class="layout layout-1-1 padded-small">
                    <div class="section">
                        <h3>Flux Components</h3>

                        <form>
                            <fieldset class="semantic">
                                <legend class="sr-only">This legend is read by screen readers, but should not be visible.</legend>

                                <x-cds.input
                                    label="Text Input" name="field1" size="32"
                                    placeholder="default (full-width)"
                                />
                                <x-cds.input
                                    label="Text Input (with <code>.native-size</code> class)" name="field1b" size="32"
                                    placeholder="honors the 'size' attribute"
                                    class="native-size"
                                />
                                <x-cds.input
                                    label="Text Input with Description" name="field1c" size="32"
                                    placeholder="use 'aria-describedby' on the input to reference the description ID"
                                    description-trailing="This description text provides additional instruction or formatting hints."
                                />
                            </fieldset>
                        </form>
                    </div>
                    <div class="section">
                        <h3>Cornell Design System HTML</h3>
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
                            </fieldset>
                        </form>
                    </div>
                </div>
                <flux:separator class="mb-4" />
                <div class="section">
                    <h2>Extended Examples</h2>
                    <form class="mb-0!">
                        <x-cds.input
                            label="Text Input with Description Before" name="field-desc-before"
                            description="This description text provides additional instruction or formatting hints."
                        />
                        <x-cds.input
                            label="Required Input" name="field-req"
                            required
                        />
                        <x-cds.input
                            label="Input with Error" name="field-error"
                            error:message="This field has an error."
                        />
                        <x-cds.input
                            label="Input with Error and Description" name="field-error-desc"
                            description-trailing="A field that shows an error message."
                            error:message="This field has an error."
                        />
                    </form>
                    <form class="no-constrain">
                        <x-cds.input
                            label="Unconstrained Text Input" name="field-unconstrained" size="32"
                            placeholder="Unconstrained"
                        >
                            <x-slot:descriptionTrailing>
                                By default, form fields and their associate labels and descriptions will fill all available width. form.no-constrain option lifts this limit limits these elements to 600px maximum width, which may be desirable in some cases where fields being wider than this will begin to lose their "field" appearance to the visitor's eyes.
                            </x-slot:descriptionTrailing>
                        </x-cds.input>
                    </form>
                </div>
            </div>
        </div>
    </article>
</x-layouts.app>

# :project_name

:project_description

## Setup

```bash
git clone git@github.com:CornellCustomDev/:project_slug.git
cd :project_slug
lando start
```

## Daily use

```bash
lando artisan <command>
lando composer <command>
```

## Layout and components

- Layout: [resources/views/components/layouts/app.blade.php](resources/views/components/layouts/app.blade.php) — [CDS docs](https://cornellcustomdev.github.io/cds-docs/)
- Components: [./resources/views/components/cds](resources/views/components/cds) — [FluxPro docs](https://fluxui.dev/docs)


### Using components
Components are used in blade files with the `<x-cds` syntax. For example, to use the text input forms component, you would write:

```blade
<x-cds.forms.input
    name="email"
    label="Email"
/>
```

You can also pass additional attributes to the component and they will be applied to the contained input element ("required" in this case). Named slots can also be used to fill attributes. For example:

```blade
<x-cds.forms.input name="name" label="Name" required>
    <x-slot:description>
        Please enter your full name.
    </x-slot:description>
</x-cds.forms.input>
```
Common and defaulted attributes can be found in the component's blade file, generally as `@prop` definitions so that an IDE can provide autocomplete.

The underlying Flux component documentation is linked from the blade file and should be consulted for additional options and usage.

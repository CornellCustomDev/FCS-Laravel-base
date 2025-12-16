# Custom Development Laravel/Livewire Starter Kit

## Setup

Run `composer setup` after cloning to set up your environment.

FluxPro components will not be accessible until you provide Flux repo credentials in auth.json.

_Note: If you run composer setup inside the lando container you will need to provide a GitHub Token to access the private https://github.com/CornellCustomDev/cds repository._

## Run npm
Run the following commands for local environment:

    npm run build
    lando artisan optimize:clear

## Recreate database with User table data:

Run this command to recreate your database and seed users table:

    lando artisan migrate:fresh --seed  

**Notes**: The migrate:refresh command will roll back all of your migrations and then execute the migrate command. This command effectively re-creates your entire database.

## Layout

The Layout is built with the Cornell Design System: https://cornellcustomdev.github.io/cds-docs/

Edit the layout starting at [resources/views/components/cds/layout/app.blade.php](resources/views/components/cds/layout/app.blade.php)

## Components

Components are built with [FluxPro](https://fluxui.dev/docs). Examples of components are at [resources/views/examples/form.blade.php](resources/views/examples/form.blade.php)

Available components:
- [Text input](resources/views/components/cds/forms/input.blade.php)

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

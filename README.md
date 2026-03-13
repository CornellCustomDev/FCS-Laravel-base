# FCS Laravel Starter Kit

Laravel starter kit for FCS projects, including the Cornell Design System and FluxPro component libraries.

## Local credentials

Add FluxPro and GitHub credentials to your home directory `~/.composer/auth.json`, which will get mapped into the environment so you can access private repositories:

```json
{
    "http-basic": {
        "composer.fluxui.dev": {
            "username": "YOUR_FLUXPRO_EMAIL",
            "password": "YOUR_FLUXPRO_LICENSE_KEY"
        }
    },
    "github-oauth": {
        "github.com": "YOUR_GITHUB_TOKEN"
    }
}
```

## Create a new project

```bash
composer create-project --no-install cornell-custom-dev/fcs-laravel-base my-project-name
cd my-project-name
lando start
```

## Daily use

```bash
lando artisan <command>
lando composer <command>
lando npm <command>
```

## Layout and components

- Layout: [resources/views/components/cds/layout/app.blade.php](resources/views/components/cds/layout/app.blade.php) — [CDS docs](https://cornellcustomdev.github.io/cds-docs/)
- Components: [resources/views/examples/form.blade.php](resources/views/examples/form.blade.php) — [FluxPro docs](https://fluxui.dev/docs)


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

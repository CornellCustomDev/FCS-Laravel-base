# Custom Development FCS Starter Kit

This is a [Laravel custom starter kit](https://laravel.com/docs/12.x/starter-kits#community-maintained-starter-kits) for FCS projects, including the Cornell Design System and FluxPro component libraries.


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
laravel new fcs-project-name --using=cornell-custom-dev/fcs-laravel-base
cd your-project-name
lando start
```

The install will set the project name in `composer.json`, `.lando.yml`,  `.env.example`, and the `README.md`. If you need it to be different, edit those files before running `lando start`.

`lando start` will run the initial database migration. 

### GitHub setup
After running the installer, you will also be able to commit the composer.lock, package-lock.json, and vendor directory. Some helpful commands for doing that, after running `lando start`:

```bash
git init
git add .
git commit -m "Initial commit"
git branch -M main
```

To create a new GitHub repository with the [GitHub CLI](https://cli.github.com/) based on the new project:

```bash
gh repo create CornellCustomDev/your-project-name --private --source=. --remote=origin --push
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

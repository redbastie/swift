# Laravel Swift

Say goodbye to HTML, CSS, and Javascript! Laravel Swift is a SwiftUI-inspired spin on Laravel Livewire. It utilizes Laravel, Livewire, Bootstrap, Font Awesome, & more under the hood.

This package is my vision for the future of PHP development. It was created with backend/CRUD apps in mind, but will work for any type of application. It also comes with useful features like automatic routing and migrations, to speed you up and lower code abstractions even more.

In order to best utilize Swift, you should be familiar with the following:

- [Laravel](https://laravel.com)
- [Livewire](https://laravel-livewire.com)
- [Bootstrap](https://getbootstrap.com)
- [Font Awesome](https://fontawesome.com)

Requirements:

- A web server that can run Laravel 8
- NPM

Links:

- Support: [GitHub Issues](https://github.com/redbastie/swift/issues)
- Contribute: [GitHub Pulls](https://github.com/redbastie/swift/pulls)
- Donate: [PayPal](https://www.paypal.com/paypalme2/kjjdion)

<a href="https://www.youtube.com/watch?v=tyxeGM5ak1g"><img src="https://i.imgur.com/2ZL7rBB.png" alt=""></a>



## Installation

This package was designed to work with clean Laravel 8 installs. All Swift apps come with basic auth scaffolding and user CRUD by default.

Install Laravel:

    laravel new app

Configure the database in your `.env` file:

    DB_DATABASE=app
    DB_USERNAME=root
    DB_PASSWORD=

Require Swift via composer:

    composer require redbastie/swift

Run the installation command:

    php artisan install:swift
    
Now you can visit your app URL and login using `user@example.com:password`, which was created via the `DatabaseSeeder` class.



## Making Components

Generate a basic component:

    php artisan make:swift ComponentName
    
This will create a component inside of the `app/Http/Livewire` directory.

Generate a basic full page component:

    php artisan make:page PageName

This will create a full page component inside of the `app/Http/Livewire` directory.

Generate CRUD scaffolding for a new model:

    php artisan make:crud ModelName
    
This will create the model, factory, nav item, and CRUD components.

Generate CRUD for a new model with a shared trait for form fields & rules:

    php artisan make:crudtrait ModelName
    
This will create the model, factory, nav item, CRUD components and trait.

Generate a new Swift model:

    php artisan make:swiftmodel ModelName
    
This will create the model and factory.



## Using Components

Full page components should specify `$routeUri` & `$pageTitle` properties:

    public $routeUri = '/tao';
    public $routeName = 'tao'; // optional
    public $routeMiddleware = 'auth'; // optional
    public $pageTitle = 'The Tao';

Swift components must implement a `view` method:

    public function view()
    {
        return S::div(
            S::livewire('layouts.navbar'),

            S::container(
                S::paragraph('Stop trying to control.')
            )
        );
    }

Using child components in the `view`:

    S::livewire('layouts.navbar'),



## Available Components

### Alert

    S::alert('Something happened!')->success(),

Methods: `dismissable`, `fade`, `primary`, `secondary`, `success`, `info`, `danger`, `warning`, `light`, `dark`

### Badge

    S::badge('New')->primary(),

Methods: `primary`, `secondary`, `success`, `info`, `danger`, `warning`, `light`, `dark`, `pill`

### Blockquote

    S::blockquote('Be like water.')->footer('The Tao'),

Methods: `footer`

### Breadcrumb

    S::breadcrumb(
        S::breadcrumbItem('Home'),
        S::breadcrumbItem('Page'),
    ),

Methods: none

### Breadcrumb Item

    S::breadcrumbItem('Home')->active(Route::is('home')),

Methods: `active`

### Button

    S::button('Do Something')->primary()->click('doSomething'),

Methods: `submit`, `primary`, `secondary`, `success`, `info`, `danger`, `warning`, `light`, `dark`, `outlinePrimary`, `outlineSecondary`, `outlineSuccess`, `outlineInfo`, `outlineDanger`, `outlineWarning`, `outlineLight`, `outlineDark`, `link`, `active`, `sm`, `lg`, `block`, `disabled`

### Button Group

    S::buttonGroup(
        S::button('Do Something')->primary()->click('doSomething'),
        S::button('Something Else')->secondary()->click('somethingElse'),
    ),

Methods: none

### Button Toolbar

    S::buttonToolbar(
        S::buttonGroup(
            S::button('Do Something')->primary()->click('doSomething'),
            S::button('Something Else')->secondary()->click('somethingElse'),
        ),
    ),

Methods: none

### Card

    S::card()
        ->header('Hello World')
        ->body('The whole world belongs to you')
        ->footer('The Tao'),

Methods: `header`, `image`, `body`, `footer`

### Checkbox

    S::checkbox('agree')->label('Agree to TOS')->modelDefer(),

Methods: `label`, `checkboxLabel`, `help`, `switch`, `inline`, `disabled`, `model`, `modelDebounce`, `modelDefer`, `modelLazy`

### Code

    S::code('$hello = $world;'),

Methods: none

### Col (Grid)

    S::col('Be like water.')->md(2),

Methods: `xs`, `auto`, `sm`, `smAuto`, `md`, `mdAuto`, `lg`, `lgAuto`, `xl`, `xlAuto`, `offset`, `offsetSm`, `offsetMd`, `offsetLg`, `offsetXl`

### Container

    S::container(
        S::paragraph('In work, do what you enjoy.'),  
    ),

Methods: none

### Div

    S::div('The best athlete wants his opponent at his best.'),

Methods: none

### Dropdown

    S::dropdown()
        ->toggle(
            S::button('Dropdown')->primary()->dropdownToggle()
        )
        ->items(
            S::button('Do Something')->dropdownItem(),
            S::button('Something Else')->dropdownItem(),
        ),

Methods: `toggle`, `items`, `right`, `smRight`, `mdRight`, `lgRight`, `xlRight`, `left`, `smLeft`, `mdLeft`, `lgLeft`, `xlLeft`

### Each (Loop)

    S::each(['Red', 'Green', 'Blue'], function ($color, $key) {
        return S::div($key . ': ' . $color);
    })->empty(
        S::paragraph('No colors to display.')
    ),

Methods: `empty`

### File

    S::file('avatar')->label('Avatar')->placeholder('Choose avatar')->modelDefer(),

Methods: `label`, `placeholder`, `help`, `model`, `modelDebounce`, `modelDefer`, `modelLazy`

### Form

    S::form(
        S::input('first_name')->label('First Name')->modelDefer(),
        S::input('last_name')->label('Last Name')->modelDefer(),
        S::button('Submit')->submit()->primary(),
    )->submitPrevent('submitForm'),

Methods: `inline`, `submit`, `submitPrevent`, `submitSelf`, `submitStop` 

### Form Group

    S::formGroup(
        S::label('First Name'),
        S::input('first_name')->modelDefer(),
    ),

Methods: `label`

### Form Row

    S::formRow(
        S::col(S::input('first')->placeholder('First')->model())->md(),
        S::col(S::input('last')->placeholder('Last')->model())->md(),
    ),

Methods: none

### Heading

    S::heading('Laravel Swift')->size(2),

Methods: `size`

### Horizontal Rule

    S::horizontalRule(),

Methods: none

### Icon (Font Awesome)

    S::icon('pastafarianism'),

Methods: `solid`, `regular`, `light`, `duotone`, `brand`, `fw`, `xs`,  `sm`,  `lg`, `x`, `spin`, `pulse`

### If (Conditional)

    // $color = 'Green';

    S::if($color == 'Red', function () {
        return S::paragraph('The color is red.');
    })->elseif($color == 'Green', function () {
        return S::paragraph('The color is green.');
    })->else(function () {
        return S::paragraph('The color is blue.');
    }),

Methods: `elseif`, `else`

### Iframe

    S::iframe('http://maps.google.com/maps?q=pizza+pizza+oshawa&z=10&output=embed')->width('100%')->height(300),

Methods: `width`, `height`

### Image

    S::image('https://i.imgur.com/zplGJnj.png')->alt('Time to kick it!'),

Methods: `alt`, `fluid`, `thumbnail`

### Input

    S::input('email')->type('email')->label('Email Address')->modelDefer(),

Methods: `type`, `label`, `help`, `placeholder`, `sm`, `lg`, `disabled`, `readonly`, `keydown`, `model`, `modelDebounce`, `modelDefer`, `modelLazy`

### Input Group

    S::inputGroup(
        S::input('first_name')->placeholder('First Name')->modelDefer(),
        S::input('last_name')->placeholder('First Name')->modelDefer(),
    )->prepend(
        S::icon('user'),
    ),

Methods: `label`, `prepend`, `append`, `sm`, `lg`

### Label

    S::label('Email Address'),

Methods: `for`

### Linebreak

    S::linebreak(),

Methods: none

### Link

    S::link('Go To Reddit')->href('https://reddit.com'),

Methods: `href`, `target`, `active`, `disabled`, `stretched`

### List

    S::list(
        S::listItem('Broccoli'),
        S::listItem('Carrot'),
        S::listItem('Lettuce'),
    ), 

Methods: `ordered`, `unstyled`, `inline`

### List Item

    S::listItem('Carrot'),
    
Methods: none

### List Group

    S::listGroup(
        S::listGroupItem('Broccoli'),
        S::listGroupItem('Carrot'),
        S::listGroupItem('Lettuce'),
    ),

Methods: `flush`, `horizontal`

### List Group Item

    S::listGroupItem('Broccoli'),

Methods: `primary`, `secondary`, `success`, `info`, `danger`, `warning`, `light`, `dark`, `action`, `active`, `disabled`

### Livewire (Component)

    S::livewire('home', ['hello' => 'world']),

Methods: none

### Modal

    S::modal('create-modal')->heading('Create Contact')
        ->body(
            S::input('first_name')->label('First Name')->modelDefer(),
            S::input('last_name')->label('Last Name')->modelDefer(),
        )
        ->footer(
            S::button('Cancel')->secondary()->click('$emit', 'hideModal', 'create-modal'),
            S::button('Save')->primary()->click('save')
        )

Methods: `heading`, `body`, `footer`, `fade`, `sm`, `lg`, `xl`

### Navbar

    S::navbar(
        S::navbarBrand(config('app.name'))->href('/'),
        S::navbarToggler(),
        S::navbarCollapse(
            S::navbarNav(
                S::navItem(S::navLink('Login')->href(route('login'))),
                S::navItem(S::navLink('Register')->href(route('register'))),
            ),
        ),
    )->expandMd()->light(),

Methods: `expand`, `expandSm`, `expandMd`, `expandLg`, `expandXl`, `light`, `dark`

### Navbar Brand

    S::navbarBrand(config('app.name'))->href('/'),

Methods: `href`, `active`, `disabled`, `stretched`

### Navbar Collapse

    S::navbarCollapse(
        S::navbarNav(
            S::navItem(S::navLink('Login')->href(route('login'))),
            S::navItem(S::navLink('Register')->href(route('register'))),
        ),
    ),

Methods: none

### Navbar Nav

    S::navbarNav(
        S::navItem(S::navLink('Login')->href(route('login'))),
        S::navItem(S::navLink('Register')->href(route('register'))),
    ),

Methods: none

### Navbar Toggler

    S::navbarToggler(),

Methods: none

### Nav

    S::nav(
        S::navItem(S::navLink('First Tab')->active()),
        S::navItem(S::navLink('Second Tab')),
    )->tabs(),

Methods: `tabs`, `pills`, `fill`, `justified`, 

### Nav Dropdown

    S::navDropdown()
        ->toggle(
            S::navLink(auth()->user()->name)->dropdownToggle(),
        )
        ->items(
            S::link('Profile')->dropdownItem()->href('/profile'),
            S::button('Logout')->dropdownItem()->click('logout'),
        ),

Methods: `toggle`, `items`, `right`, `smRight`, `mdRight`, `lgRight`, `xlRight`, `left`, `smLeft`, `mdLeft`, `lgLeft`, `xlLeft`

### Nav Link

    S::navLink('Home')->href('/'),

Methods: `href`, `active`, `disabled`, `stretched`

### Pagination

    // $users = User::query()->paginate();

    S::pagination($users),

Methods: none

### Paragraph

    S::paragraph('Close your eyes. Count to one. That is how long forever feels.'),

Methods: none

### Pre

    S::pre(json_encode(['Red', 'Green', 'Blue'], JSON_PRETTY_PRINT)),

Methods: none

### Progress Bar

    S::progressBar(25)->label('Completed'),

Methods: `label`, `striped`, `animated`

### Radio

    S::radio('gender')->options(['Male', 'Female'])->modelDefer(),

Methods: `options`, `label`, `help`, `inline`, `disabled`, `model`, `modelDebounce`, `modelDefer`, `modelLazy`

### Row (Grid)

    S::row(
        S::col('Hello')->xs(),
        S::col('World')->xs(),
    ),

Methods: `noGutters`

### Select

    S::select('gender')->options(['Male', 'Female'])->modelDefer(),

Methods: `options`, `label`, `placeholder`, `help`, `sm`, `lg`, `disabled`, `model`, `modelDebounce`, `modelDefer`, `modelLazy`

### Span

    S::span('Do your work, then step back.'),

Methods: none

### Table

    S::table(
        S::tableBody(
            S::tableRow(
                S::tableData('Name'),
                S::tableData('Email'),
            ),
        ),
    ),

Methods: `responsive`, `dark`, `striped`, `bordered`, `borderless`, `hover`, `sm`

### Table Body

    S::tableBody(
        S::tableRow(
            S::tableData('Name'),
            S::tableData('Email'),
        ),
    ),

Methods: none

### Table Data

    S::tableData('Name'),

Methods: `active`, `primary`, `secondary`, `success`, `info`, `danger`, `warning`, `light`, `dark`

### Table Head

    S::tableHead(
        S::tableRow(
            S::tableHeader('Name'),
            S::tableHeader('Email'),
        ),
    ),

Methods: `light`, `dark`

### Table Header

    S::tableHeader('Name'),

Methods: `active`, `primary`, `secondary`, `success`, `info`, `danger`, `warning`, `light`, `dark`

### Table Row

    S::tableRow(
        S::tableHeader('Name'),
        S::tableHeader('Email'),
    ),

Methods: `active`, `primary`, `secondary`, `success`, `info`, `danger`, `warning`, `light`, `dark`

### Textarea

    S::textarea('bio')->label('Biography')->modelDefer(),

Methods: `rows`, `label`, `help`, `placeholder`, `sm`, `lg`, `disabled`, `readonly`, `keydown`, `model`, `modelDebounce`, `modelDefer`, `modelLazy`

### View

    S::view('my-view-name', ['hello' => 'world']),

Methods: none



## Component Utilities

### Bootstrap

All components have access to Bootstrap utilities. Their methods are named similar to the corresponding Bootstrap CSS classes.

For example, setting a background color:

    S::div('Hello world!')->bgDanger(),

Adjusting paddings, margins, etc:

    S::div('Hello world!')->bgDanger()->p(2)->mb(3),

A couple of Bootstrap Javascript utilities are available as well, like collapse:

    S::button('Collapse Paragraph')->info()->collapseToggle('para'),
    S::paragraph('In work, do what you enjoy.')->collapse('para'),
    
Showing/hiding modals:

    S::button('Show Modal')->primary()->click('$emit', 'showModal', 'the-modal'),

    S::modal('the-modal')->heading('The Modal')
        ->body(S::paragraph('Stop trying to control.'))
        ->footer(S::button('Close')->secondary()->click('$emit', 'hideModal', 'the-modal'),

Showing toasts:

    $this->emit('toastError', 'Oh no! There was a problem.');

### Livewire

Livewire actions are mapped using the corresponding `wire:` conventions.

For example, setting `click` actions:

    S::button('Delete')->danger()->click('deleteItem'),
    
In this case, you would have a `deleteItem` function inside your component.
    
`click` actions with one or more parameters:

    S::link('Update')->clickPrevent('updateItem', $item->id),
    S::button('Close')->secondary()->click('$emit', 'hideModal', 'the-modal'),
    
Modelling input elements:

    S::input('name')->label('Name')->modelLazy(),
    S::textarea('desc')->label('Description')->modelDefer(),
    
The input name is automatically wired via the specified model methods. You may access this data via the `$this->model` property array inside of your component. For example, `$this->model['name']`.

`loading` and `polling`:

    S::span('Loading...')->loading(),
    S::span(now())->poll(),

### Digging Deeper

Take a look at the package [Traits](src/Traits) for a complete list of all utility methods along with their parameters.



## Automation

### Automatic Routes

When creating a full page Swift component, simply declare a `$routeUri` property in order to auto-route the component:

    class Login extends SwiftComponent
    {
        public $routeUri = '/login';
        
You can view a list of your routes via the `route:list` artisan command.
        
### Automatic Migrations

In order to use automatic migrations, simply specify a `migration` method in your model:

    class Lead extends Model
    {
        use SwiftModel;
    
        public function migration(Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->timestamps();
        }

Now run the automatic migration command:

    php artisan migrate:auto

The package uses Doctrine DBAL in order to diff the existing model table and make the necessary changes to it. If the table does not exist, it will create it.

You can also pass `--fresh` and/or `--seed` to the `migrate:auto` command in order to get fresh migrations and/or run your seeders afterwards:

    php artisan migrate:auto --fresh --seed
    
If your app contains traditional migrations in the `database/migrations` folder, they will be handled before the automatic migrations.

### Automatic Fillables

Models containing the `SwiftModel` trait have automatic fillables, meaning their `$fillable` property is automatically generated via the model table column names.



## Config, Views, & Translations

The config, views, & translation files can be published using the `vendor:publish` command.

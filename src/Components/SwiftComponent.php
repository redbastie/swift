<?php

namespace Redbastie\Swift\Components;

use Illuminate\Support\Facades\View;

class SwiftComponent
{
    public static function alert(...$content)
    {
        return new AlertComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function badge(...$content)
    {
        return new BadgeComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function blockquote(...$content)
    {
        return new BlockquoteComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function breadcrumb(...$content)
    {
        return new BreadcrumbComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function breadcrumbItem(...$content)
    {
        return new BreadcrumbItemComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function button(...$content)
    {
        return new ButtonComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function buttonGroup(...$content)
    {
        return new ButtonGroupComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function buttonToolbar(...$content)
    {
        return new ButtonToolbarComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function card()
    {
        return new CardComponent;
    }

    public static function checkbox($name)
    {
        return new CheckboxComponent($name);
    }

    public static function code(...$content)
    {
        return new CodeComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function col(...$content)
    {
        return new ColComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function container(...$content)
    {
        return new ContainerComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function div(...$content)
    {
        return new DivComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function dropdown()
    {
        return new DropdownComponent();
    }

    public static function each($items, $callback)
    {
        return new EachComponent($items, $callback);
    }

    public static function file($name)
    {
        return new FileComponent($name);
    }

    public static function form(...$content)
    {
        return new FormComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function formGroup(...$content)
    {
        return new FormGroupComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function formRow(...$content)
    {
        return new FormRowComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function heading(...$content)
    {
        return new HeadingComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function horizontalRule()
    {
        return new HorizontalRuleComponent();
    }

    public static function icon($name)
    {
        return new IconComponent($name);
    }

    public static function if($condition, $callback)
    {
        return new IfComponent($condition, $callback);
    }

    public static function iframe($src)
    {
        return new IframeComponent($src);
    }

    public static function image($src)
    {
        return new ImageComponent($src);
    }

    public static function input($name)
    {
        return new InputComponent($name);
    }

    public static function inputGroup(...$content)
    {
        return new InputGroupComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function label(...$content)
    {
        return new LabelComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function linebreak()
    {
        return new LinebreakComponent();
    }

    public static function link(...$content)
    {
        return new LinkComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function list(...$content)
    {
        return new ListComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function listItem(...$content)
    {
        return new ListItemComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function listGroup(...$content)
    {
        return new ListGroupComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function listGroupItem(...$content)
    {
        return new ListGroupItemComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function livewire($name, $data = [])
    {
        return new LivewireComponent($name, $data);
    }

    public static function modal($id)
    {
        return new ModalComponent($id);
    }

    public static function nav(...$content)
    {
        return new NavComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function navItem(...$content)
    {
        return new NavItemComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function navLink(...$content)
    {
        return new NavLinkComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function navDropdown()
    {
        return new NavDropdownComponent();
    }

    public static function navbar(...$content)
    {
        return new NavbarComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function navbarBrand(...$content)
    {
        return new NavbarBrandComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function navbarCollapse(...$content)
    {
        return new NavbarCollapseComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function navbarNav(...$content)
    {
        return new NavbarNavComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function navbarToggler()
    {
        return new NavbarTogglerComponent();
    }

    public static function pagination($models)
    {
        return new PaginationComponent($models);
    }

    public static function paragraph(...$content)
    {
        return new ParagraphComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function pre(...$content)
    {
        return new PreComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function progressBar($percent)
    {
        return new ProgressBarComponent($percent);
    }

    public static function radio($name)
    {
        return new RadioComponent($name);
    }

    public static function row(...$content)
    {
        return new RowComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function select($name)
    {
        return new SelectComponent($name);
    }

    public static function span(...$content)
    {
        return new SpanComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function table(...$content)
    {
        return new TableComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function tableBody(...$content)
    {
        return new TableBodyComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function tableData(...$content)
    {
        return new TableDataComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function tableHead(...$content)
    {
        return new TableHeadComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function tableHeader(...$content)
    {
        return new TableHeaderComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function tableRow(...$content)
    {
        return new TableRowComponent(implode(PHP_EOL, func_get_args()));
    }

    public static function textarea($name)
    {
        return new TextareaComponent($name);
    }

    public static function view($name, $data = [])
    {
        return View::make($name, $data)->render();
    }
}

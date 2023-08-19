<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_fe33c6c45845305ff8422acade70184c243f53b583d0029978bd6e29c302f99c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = ["dark" => ["info" => "#39A0ED", "warning" => "#F0AD4E", "danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"], "light" => ["info" => "#39A0ED", "warning" => "#F0AD4E", "danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"]];
        // line 47
        echo "
";
        // line 48
        $context["colors"] = $this->getAttribute(($context["color_schemes"] ?? null), ($context["color_scheme"] ?? null), [], "array");
        // line 49
        echo "
";
        // line 56
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 64
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 75
        echo "a        { color: ";
        echo $this->getAttribute(($context["colors"] ?? null), "link", []);
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 86
        echo $this->getAttribute(($context["colors"] ?? null), "link", []);
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 90
        echo $this->getAttribute(($context["colors"] ?? null), "danger", []);
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 99
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 117
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 121
        echo $this->getAttribute(($context["colors"] ?? null), "success", []);
        echo ";
    color: ";
        // line 122
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
}
div.flash-error {
    background: ";
        // line 125
        echo $this->getAttribute(($context["colors"] ?? null), "danger", []);
        echo ";
    color: ";
        // line 126
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 135
        echo ".label:not([class*=label-]) {
    background: ";
        // line 136
        echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", []);
        echo ";
}
.label {
    color: ";
        // line 139
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 148
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? null), "success", []);
        echo " !important;
}
.label-danger {
    ";
        // line 152
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? null), "danger", []);
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 158
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
        echo ";
    padding: 4px 8px;
}

";
        // line 163
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 172
        echo ".toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 214
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 230
        echo "span.badge {
    background-color: ";
        // line 231
        echo ($context["brand_color"] ?? null);
        echo ";
}

";
        // line 236
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 253
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 254
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
            echo ";
";
        } elseif (("light" ==         // line 255
($context["color_scheme"] ?? null))) {
            // line 256
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray", []);
            echo ";
";
        }
        // line 258
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 261
        echo $this->getAttribute(($context["colors"] ?? null), "text", []);
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}
.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 289
        echo ($context["brand_color"] ?? null);
        echo ";
    border-color: transparent;
    color: ";
        // line 291
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: ";
        // line 298
        echo $this->getAttribute(($context["colors"] ?? null), "info", []);
        echo ";
    border-color: transparent;
    color: ";
        // line 300
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
}
.btn-warning,
.btn-warning:hover,
.btn-warning:active,
.btn-warning:focus,
.btn-warning:active:hover {
    background-color: ";
        // line 307
        echo $this->getAttribute(($context["colors"] ?? null), "warning", []);
        echo ";
    border-color: transparent;
    color: ";
        // line 309
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
}
.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 316
        echo $this->getAttribute(($context["colors"] ?? null), "danger", []);
        echo ";
    border-color: transparent;
    color: ";
        // line 318
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
}
.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 325
        echo $this->getAttribute(($context["colors"] ?? null), "success", []);
        echo ";
    border-color: transparent;
    color: ";
        // line 327
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
}

";
        // line 331
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 337
        echo ($context["brand_color"] ?? null);
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-warning,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 367
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 372
        echo $this->getAttribute(($context["colors"] ?? null), "gray", []);
        echo ";
    border-radius: 0;
";
        // line 374
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 375
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 377
        echo "    color: ";
        echo $this->getAttribute(($context["colors"] ?? null), "text", []);
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 382
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 383
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", []);
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 385
($context["color_scheme"] ?? null))) {
            // line 386
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", []);
            echo ";
";
        }
        // line 388
        echo "}

.has-error .error-block {
    color: ";
        // line 391
        echo $this->getAttribute(($context["colors"] ?? null), "danger", []);
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 407
        echo $this->getAttribute(($context["colors"] ?? null), "text_muted", []);
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 417
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 418
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 419
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
            echo ";
";
        } elseif (("light" ==         // line 420
($context["color_scheme"] ?? null))) {
            // line 421
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 422
            echo $this->getAttribute(($context["colors"] ?? null), "gray", []);
            echo ";
";
        }
        // line 424
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 426
        if ((((isset($context["kernel_debug"]) || array_key_exists("kernel_debug", $context))) ? (_twig_default_filter(($context["kernel_debug"] ?? null), false)) : (false))) {
            // line 427
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 430
        echo "    z-index: 9999;
}

.field-group .box-header a i {
    font-size: 21px;
}

.field-group .box-header a[aria-expanded=true] .fa-plus-square-o {
   display: none;
}
.field-group .box-header a[aria-expanded=false] .fa-minus-square-o {
   display: none;
}

";
        // line 446
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 452
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 457
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 458
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 459
($context["color_scheme"] ?? null))) {
            // line 460
            echo "    border-top-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
            echo ";
";
        }
        // line 462
        echo "}
.field-group .field-divider hr {
";
        // line 464
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 465
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 466
($context["color_scheme"] ?? null))) {
            // line 467
            echo "    border-top-color: #EEE;
";
        }
        // line 469
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 475
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 476
            echo "    border-bottom: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
            echo ";
    color: ";
            // line 477
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", []);
            echo ";
";
        } elseif (("light" ==         // line 478
($context["color_scheme"] ?? null))) {
            // line 479
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 480
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", []);
            echo ";
";
        }
        // line 482
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 486
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 487
            echo "    color: #555;
";
        } elseif (("light" ==         // line 488
($context["color_scheme"] ?? null))) {
            // line 489
            echo "    color: #777;
";
        }
        // line 491
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 498
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 499
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 500
($context["color_scheme"] ?? null))) {
            // line 501
            echo "    border: 1px solid #EEE;
";
        }
        // line 503
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 506
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 507
            echo "    color: #555;
";
        } elseif (("light" ==         // line 508
($context["color_scheme"] ?? null))) {
            // line 509
            echo "    color: #777;
";
        }
        // line 511
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 514
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 515
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 517
($context["color_scheme"] ?? null))) {
            // line 518
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 520
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", []);
            echo ";
";
        }
        // line 522
        echo "    padding: 11px 10px 9px;
}
";
        // line 524
        if (("light" == ($context["color_scheme"] ?? null))) {
            // line 525
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 529
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 539
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 543
        echo $this->getAttribute(($context["colors"] ?? null), "gray", []);
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 546
        echo $this->getAttribute(($context["colors"] ?? null), "text", []);
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 554
        echo $this->getAttribute(($context["colors"] ?? null), "text", []);
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 561
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 565
        echo ($context["brand_color"] ?? null);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 568
        echo $this->getAttribute(($context["colors"] ?? null), "text", []);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 571
        echo $this->getAttribute(($context["colors"] ?? null), "danger", []);
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 577
        echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", []);
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 590
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 591
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
    box-shadow: 0 0 3px ";
        // line 592
        echo $this->getAttribute(($context["colors"] ?? null), "gray", []);
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 605
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 615
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 616
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
    box-shadow: 0 0 3px ";
        // line 617
        echo $this->getAttribute(($context["colors"] ?? null), "gray", []);
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 639
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 647
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
        echo ";
    border-top: 1px solid ";
        // line 648
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
        echo ";
    margin-top: 1.5em;
}

";
        // line 654
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 662
        echo "
";
        // line 665
        echo ".content-wrapper {
    background: ";
        // line 666
        echo $this->getAttribute(($context["colors"] ?? null), "page_background", []);
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 674
        echo ".main-header {
    background: ";
        // line 675
        echo ($context["brand_color"] ?? null);
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 679
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 681
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 706
        echo ($context["brand_color"] ?? null);
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 725
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 782
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 798
        echo ".main-sidebar,
.wrapper {
";
        // line 800
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 801
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 802
($context["color_scheme"] ?? null))) {
            // line 803
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
            echo ";
";
        }
        // line 805
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 811
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 812
            echo "    color: #777;
";
        } elseif (("light" ==         // line 813
($context["color_scheme"] ?? null))) {
            // line 814
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", []);
            echo ";
";
        }
        // line 816
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 821
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 822
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 823
($context["color_scheme"] ?? null))) {
            // line 824
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
            echo ";
";
        }
        // line 826
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 843
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 844
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 846
($context["color_scheme"] ?? null))) {
            // line 847
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", []);
            echo ";
";
        }
        // line 849
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 855
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 856
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 857
($context["color_scheme"] ?? null))) {
            // line 858
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
            echo ";
";
        }
        // line 860
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 869
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 870
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "white", []);
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 873
($context["color_scheme"] ?? null))) {
            // line 874
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 877
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 886
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 903
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 904
            echo "    background: #333;
";
        } elseif (("light" ==         // line 905
($context["color_scheme"] ?? null))) {
            // line 906
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
            echo ";
";
        }
        // line 908
        echo "}

";
        // line 911
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 912
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 913
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 914
($context["color_scheme"] ?? null))) {
            // line 915
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 917
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 927
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 932
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 933
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", []);
            echo ";
";
        } elseif (("light" ==         // line 934
($context["color_scheme"] ?? null))) {
            // line 935
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 937
            echo $this->getAttribute(($context["colors"] ?? null), "text_muted", []);
            echo ";
";
        }
        // line 939
        echo "    margin: 10px 0 5px;
}

";
        // line 945
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 981
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 994
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
";
        // line 995
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 996
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
            echo ";
";
        } elseif (("light" ==         // line 997
($context["color_scheme"] ?? null))) {
            // line 998
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray", []);
            echo ";
";
        }
        // line 1000
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 1004
        echo $this->getAttribute(($context["colors"] ?? null), "table_row_border", []);
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1045
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1058
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1065
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1066
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "text_muted", []);
            echo ";
";
        } elseif (("light" ==         // line 1067
($context["color_scheme"] ?? null))) {
            // line 1068
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray", []);
            echo ";
";
        }
        // line 1070
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1072
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
    border-color: ";
        // line 1073
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
        echo ";
    border-radius: 0;
    color: ";
        // line 1075
        echo $this->getAttribute(($context["colors"] ?? null), "text", []);
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1078
        echo ($context["brand_color"] ?? null);
        echo ";
    color: ";
        // line 1079
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1091
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1099
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1101
        echo $this->getAttribute(($context["colors"] ?? null), "danger", []);
        echo ";
    font-size: 16px;
}

";
        // line 1108
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1130
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1152
        echo "body.show .form-control {
";
        // line 1153
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1154
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "white", []);
            echo ";
";
        } elseif (("light" ==         // line 1155
($context["color_scheme"] ?? null))) {
            // line 1156
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
            echo ";
";
        }
        // line 1158
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1172
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1177
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
    border: 1px solid ";
        // line 1178
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
        echo ";
    box-shadow: 0 0 3px ";
        // line 1179
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1184
        echo $this->getAttribute(($context["colors"] ?? null), "danger", []);
        echo ";
    color: ";
        // line 1185
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1201
        echo "
";
        // line 1205
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1229
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1276
        echo "    body.list table {
        background: ";
        // line 1277
        echo $this->getAttribute(($context["colors"] ?? null), "white", []);
        echo ";
        border: 1px solid ";
        // line 1278
        echo $this->getAttribute(($context["colors"] ?? null), "table_border", []);
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1284
        echo $this->getAttribute(($context["colors"] ?? null), "table_header", []);
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1288
        echo $this->getAttribute(($context["colors"] ?? null), "gray", []);
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1293
        echo $this->getAttribute(($context["colors"] ?? null), "text", []);
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1299
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1304
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1305
            echo "        background: ";
            echo ($context["brand_color"] ?? null);
            echo ";
        color: ";
            // line 1306
            echo $this->getAttribute(($context["colors"] ?? null), "white", []);
            echo ";
";
        }
        // line 1308
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1311
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1312
            echo "        color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "white", []);
            echo ";
";
        } elseif (("light" ==         // line 1313
($context["color_scheme"] ?? null))) {
            // line 1314
            echo "        color: ";
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1316
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1324
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1327
        echo ($context["brand_color"] ?? null);
        echo ";
    }
    ";
        // line 1330
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1331
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1332
            echo "        border-left: 1px solid ";
            echo ($context["brand_color"] ?? null);
            echo ";
        border-top: 1px solid ";
            // line 1333
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1335
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1337
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", []);
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1346
        echo $this->getAttribute(($context["colors"] ?? null), "table_row_border", []);
        echo ";
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1358
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
        echo ";
        border-color: ";
        // line 1359
        echo $this->getAttribute(($context["colors"] ?? null), "table_row_border", []);
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1362
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", []);
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1402
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1892 => 1402,  1851 => 1362,  1845 => 1359,  1841 => 1358,  1826 => 1346,  1814 => 1337,  1810 => 1335,  1805 => 1333,  1800 => 1332,  1798 => 1331,  1795 => 1330,  1790 => 1327,  1784 => 1324,  1774 => 1316,  1768 => 1314,  1766 => 1313,  1761 => 1312,  1759 => 1311,  1754 => 1308,  1749 => 1306,  1744 => 1305,  1742 => 1304,  1734 => 1299,  1725 => 1293,  1717 => 1288,  1710 => 1284,  1701 => 1278,  1697 => 1277,  1694 => 1276,  1646 => 1229,  1621 => 1205,  1618 => 1201,  1602 => 1185,  1598 => 1184,  1590 => 1179,  1586 => 1178,  1582 => 1177,  1575 => 1172,  1562 => 1158,  1556 => 1156,  1554 => 1155,  1549 => 1154,  1547 => 1153,  1544 => 1152,  1523 => 1130,  1502 => 1108,  1495 => 1101,  1491 => 1099,  1484 => 1091,  1472 => 1079,  1468 => 1078,  1462 => 1075,  1457 => 1073,  1453 => 1072,  1449 => 1070,  1443 => 1068,  1441 => 1067,  1436 => 1066,  1434 => 1065,  1425 => 1058,  1412 => 1045,  1370 => 1004,  1364 => 1000,  1358 => 998,  1356 => 997,  1351 => 996,  1349 => 995,  1345 => 994,  1330 => 981,  1294 => 945,  1289 => 939,  1284 => 937,  1280 => 935,  1278 => 934,  1273 => 933,  1271 => 932,  1264 => 927,  1255 => 917,  1251 => 915,  1249 => 914,  1246 => 913,  1244 => 912,  1241 => 911,  1237 => 908,  1231 => 906,  1229 => 905,  1226 => 904,  1224 => 903,  1205 => 886,  1195 => 877,  1190 => 874,  1188 => 873,  1181 => 870,  1179 => 869,  1168 => 860,  1162 => 858,  1160 => 857,  1157 => 856,  1155 => 855,  1147 => 849,  1141 => 847,  1139 => 846,  1135 => 844,  1133 => 843,  1114 => 826,  1108 => 824,  1106 => 823,  1103 => 822,  1101 => 821,  1094 => 816,  1088 => 814,  1086 => 813,  1083 => 812,  1081 => 811,  1073 => 805,  1067 => 803,  1065 => 802,  1062 => 801,  1060 => 800,  1056 => 798,  1040 => 782,  982 => 725,  960 => 706,  933 => 681,  929 => 679,  922 => 675,  919 => 674,  910 => 666,  907 => 665,  904 => 662,  897 => 654,  890 => 648,  886 => 647,  876 => 639,  853 => 617,  849 => 616,  846 => 615,  836 => 605,  821 => 592,  817 => 591,  814 => 590,  800 => 577,  791 => 571,  785 => 568,  779 => 565,  772 => 561,  762 => 554,  751 => 546,  745 => 543,  739 => 539,  730 => 529,  724 => 525,  722 => 524,  718 => 522,  713 => 520,  707 => 518,  705 => 517,  701 => 515,  699 => 514,  694 => 511,  690 => 509,  688 => 508,  685 => 507,  683 => 506,  678 => 503,  674 => 501,  672 => 500,  669 => 499,  667 => 498,  658 => 491,  654 => 489,  652 => 488,  649 => 487,  647 => 486,  641 => 482,  636 => 480,  633 => 479,  631 => 478,  627 => 477,  622 => 476,  620 => 475,  612 => 469,  608 => 467,  606 => 466,  603 => 465,  601 => 464,  597 => 462,  591 => 460,  589 => 459,  586 => 458,  584 => 457,  577 => 452,  571 => 446,  555 => 430,  550 => 427,  548 => 426,  544 => 424,  539 => 422,  534 => 421,  532 => 420,  528 => 419,  523 => 418,  521 => 417,  508 => 407,  489 => 391,  484 => 388,  478 => 386,  476 => 385,  470 => 383,  468 => 382,  459 => 377,  455 => 375,  453 => 374,  448 => 372,  441 => 367,  410 => 337,  402 => 331,  396 => 327,  391 => 325,  381 => 318,  376 => 316,  366 => 309,  361 => 307,  351 => 300,  346 => 298,  336 => 291,  331 => 289,  300 => 261,  295 => 258,  289 => 256,  287 => 255,  282 => 254,  280 => 253,  261 => 236,  255 => 231,  252 => 230,  235 => 214,  191 => 172,  184 => 163,  177 => 158,  167 => 152,  160 => 148,  149 => 139,  143 => 136,  140 => 135,  131 => 126,  127 => 125,  121 => 122,  117 => 121,  111 => 117,  93 => 99,  83 => 90,  76 => 86,  61 => 75,  50 => 64,  43 => 56,  40 => 49,  38 => 48,  35 => 47,  33 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/css/easyadmin.css.twig", "C:\\wamp64\\www\\eshop\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\css\\easyadmin.css.twig");
    }
}

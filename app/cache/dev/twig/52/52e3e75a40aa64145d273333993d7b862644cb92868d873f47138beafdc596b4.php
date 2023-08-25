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

/* @Frontend/Default/selectStationMap.html.twig */
class __TwigTemplate_feb90f4348fa81c8d82358d570ea910d19442b7af3d0caec3705397762c3c129 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Frontend/Default/selectStationMap.html.twig"));

        // line 1
        echo "<style>
    span.station-title {
        color: #ed0000;
        display: block;
    }

    span.station-address {
        color: gray;
        display: block;
    }

    .col-station {
        margin-bottom: 40px;
    }

    .station-region {
        padding: 12px;
    }
</style>
<!-- choose station -->
<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"chooseStationModalMap\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-body\" style=\"padding-top: 0px;padding-bottom: 0px;\">
                <div class=\"row\">

                    <div class=\"\" id=\"googleMap\" style=\"width:100%;height:400px;\"></div>

                </div>
            </div>

        </div>
    </div>
</div>
";
        // line 36
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "station_id", 1 => ""], "method") == "")) {
            // line 37
            echo "    <script>
        \$(\"document\").ready(function () {
            \$('#chooseStationModalMap').modal({
                backdrop: 'static',
                keyboard: false
            });
            //  \$('select').select2();
        })

    </script>
    <!-- choose station -->
";
        }
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('script', $context, $blocks);
        // line 195
        echo "

<style>
    .itempopupDesc {
        font-family: Roboto-Regular, sans-serif;
        color: #374649;
        font-size: 14px;
        line-height: 18px;
    }


    .titlepopup {
        font-family: Roboto-Regular, sans-serif;
        font-size: 16px;
        background: -webkit-linear-gradient(left, rgba(239, 111, 0), rgba(237, 0, 0)) !important;

        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
    }

    .btnpopup {


        color: #ffffff;
        border: 1px solid #ED0000;

        padding: 0;
        height: 34px;
        width: 58px;
        font-family: Roboto-Regular, sans-serif;
        font-weight: normal;
        font-size: 14px;

        background: #ED0000;
        text-align: center;
        border-radius: 15px;


    }

    .btnpopup:hover {
        color: #ED0000;
        background: #ffffff;


    }

    .optionpopup {
        font-family: Roboto-Regular, sans-serif;
        font-weight: 400;
        color: #374649;
        font-size: 14px;


    }

    /* .optionpopup{
          font-family: Roboto,sans-serif;
          font-weight: normal;
          font-size: 14px;


      }*/
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_script($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 51
        echo "
<script>
    function showSelectStationMap() {
        \$('#chooseStationModalMap').modal();
    }


</script>
<script >



    function showPosition(position) {
        var mapProp= {
            center:new google.maps.LatLng( position.coords.latitude, position.coords.longitude),
            zoom:10,
        };
        var map = new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);



        <!-- get list stations ajax  getliststation -->

        var LocationStations =[] ;

        var infowindow = new google.maps.InfoWindow();
        var marker, i;

        \$.ajax({
            type: \"GET\",
            data:'' ,
            url: \"getliststation\",
            dataType: \"json\",
            cache: false,
            success: function (response) {
                console.log(\"rahmaaa\");
                LocationStations = response.results ;

                <!-- JSON.parse('')-->
                if (LocationStations){
                    for (i = 0; i < LocationStations.length; i++) {
                        // var cascades = locations[i];
                        var myLatLng =  new google.maps.LatLng( LocationStations[i]['latitude'],  LocationStations[i]['longitude']) ;

                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title:   LocationStations[i]['nom'],
                        });


                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent(LocationStations[i]['nom']+\"<br />\"+LocationStations[i]['address']);
                                infowindow.open(map, marker);
                            }
                        })(marker, i));





                    }

                }            },
            error: function (response) {
                console.log(response);
            }
        });

     //   LocationStations = JSON.parse('";
        // line 121
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["stations"] ?? $this->getContext($context, "stations"))), "html", null, true);
        echo "');



    }
    function myMap() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            var map = new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);



            <!-- get list stations ajax  getliststation -->

            var LocationStations =[] ;

            var infowindow = new google.maps.InfoWindow();
            var marker, i;

            \$.ajax({
                type: \"GET\",
                data:'' ,
                url: \"getliststation\",
                dataType: \"json\",
                cache: false,
                success: function (response) {
                    console.log(\"rahmaaa\");
                    LocationStations = response.results ;

                    <!-- JSON.parse('')-->
                    if (LocationStations){
                        for (i = 0; i < LocationStations.length; i++) {
                            // var cascades = locations[i];
                            var myLatLng =  new google.maps.LatLng( LocationStations[i]['latitude'],  LocationStations[i]['longitude']) ;

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                title:   LocationStations[i]['nom'],
                            });


                            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {
                                    infowindow.setContent(LocationStations[i]['nom']+\"<br />\"+LocationStations[i]['address']);
                                    infowindow.open(map, marker);
                                }
                            })(marker, i));





                        }

                    }            },
                error: function (response) {
                    console.log(response);
                }
            });

        }



       }


</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDYhfYs2iY5PFut6nyg40SkRzC4iiJk98A&callback=myMap\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Frontend/Default/selectStationMap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 121,  170 => 51,  164 => 50,  92 => 195,  90 => 50,  87 => 49,  73 => 37,  71 => 36,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style>
    span.station-title {
        color: #ed0000;
        display: block;
    }

    span.station-address {
        color: gray;
        display: block;
    }

    .col-station {
        margin-bottom: 40px;
    }

    .station-region {
        padding: 12px;
    }
</style>
<!-- choose station -->
<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"chooseStationModalMap\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-body\" style=\"padding-top: 0px;padding-bottom: 0px;\">
                <div class=\"row\">

                    <div class=\"\" id=\"googleMap\" style=\"width:100%;height:400px;\"></div>

                </div>
            </div>

        </div>
    </div>
</div>
{% if app.session.get(\"station_id\",\"\") == \"\" %}
    <script>
        \$(\"document\").ready(function () {
            \$('#chooseStationModalMap').modal({
                backdrop: 'static',
                keyboard: false
            });
            //  \$('select').select2();
        })

    </script>
    <!-- choose station -->
{% endif %}

{% block script %}

<script>
    function showSelectStationMap() {
        \$('#chooseStationModalMap').modal();
    }


</script>
<script >



    function showPosition(position) {
        var mapProp= {
            center:new google.maps.LatLng( position.coords.latitude, position.coords.longitude),
            zoom:10,
        };
        var map = new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);



        <!-- get list stations ajax  getliststation -->

        var LocationStations =[] ;

        var infowindow = new google.maps.InfoWindow();
        var marker, i;

        \$.ajax({
            type: \"GET\",
            data:'' ,
            url: \"getliststation\",
            dataType: \"json\",
            cache: false,
            success: function (response) {
                console.log(\"rahmaaa\");
                LocationStations = response.results ;

                <!-- JSON.parse('')-->
                if (LocationStations){
                    for (i = 0; i < LocationStations.length; i++) {
                        // var cascades = locations[i];
                        var myLatLng =  new google.maps.LatLng( LocationStations[i]['latitude'],  LocationStations[i]['longitude']) ;

                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title:   LocationStations[i]['nom'],
                        });


                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent(LocationStations[i]['nom']+\"<br />\"+LocationStations[i]['address']);
                                infowindow.open(map, marker);
                            }
                        })(marker, i));





                    }

                }            },
            error: function (response) {
                console.log(response);
            }
        });

     //   LocationStations = JSON.parse('{{ stations | json_encode  }}');



    }
    function myMap() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            var map = new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);



            <!-- get list stations ajax  getliststation -->

            var LocationStations =[] ;

            var infowindow = new google.maps.InfoWindow();
            var marker, i;

            \$.ajax({
                type: \"GET\",
                data:'' ,
                url: \"getliststation\",
                dataType: \"json\",
                cache: false,
                success: function (response) {
                    console.log(\"rahmaaa\");
                    LocationStations = response.results ;

                    <!-- JSON.parse('')-->
                    if (LocationStations){
                        for (i = 0; i < LocationStations.length; i++) {
                            // var cascades = locations[i];
                            var myLatLng =  new google.maps.LatLng( LocationStations[i]['latitude'],  LocationStations[i]['longitude']) ;

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                title:   LocationStations[i]['nom'],
                            });


                            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {
                                    infowindow.setContent(LocationStations[i]['nom']+\"<br />\"+LocationStations[i]['address']);
                                    infowindow.open(map, marker);
                                }
                            })(marker, i));





                        }

                    }            },
                error: function (response) {
                    console.log(response);
                }
            });

        }



       }


</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDYhfYs2iY5PFut6nyg40SkRzC4iiJk98A&callback=myMap\"></script>


{% endblock %}


<style>
    .itempopupDesc {
        font-family: Roboto-Regular, sans-serif;
        color: #374649;
        font-size: 14px;
        line-height: 18px;
    }


    .titlepopup {
        font-family: Roboto-Regular, sans-serif;
        font-size: 16px;
        background: -webkit-linear-gradient(left, rgba(239, 111, 0), rgba(237, 0, 0)) !important;

        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
    }

    .btnpopup {


        color: #ffffff;
        border: 1px solid #ED0000;

        padding: 0;
        height: 34px;
        width: 58px;
        font-family: Roboto-Regular, sans-serif;
        font-weight: normal;
        font-size: 14px;

        background: #ED0000;
        text-align: center;
        border-radius: 15px;


    }

    .btnpopup:hover {
        color: #ED0000;
        background: #ffffff;


    }

    .optionpopup {
        font-family: Roboto-Regular, sans-serif;
        font-weight: 400;
        color: #374649;
        font-size: 14px;


    }

    /* .optionpopup{
          font-family: Roboto,sans-serif;
          font-weight: normal;
          font-size: 14px;


      }*/
</style>

", "@Frontend/Default/selectStationMap.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle\\Resources\\views\\Default\\selectStationMap.html.twig");
    }
}

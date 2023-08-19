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

/* FrontendBundle:Default:selectStation.html.twig */
class __TwigTemplate_52de62601e93040022c32db4f59e36cc154a37279766c6b1c2abb99739590cd6 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontendBundle:Default:selectStation.html.twig"));

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


    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        padding: 0 !important; /* override inline padding-right added from js */
        width: 100vw !important;
        height: 100vh !important;
        outline: 0;
    }
    .modal-dialog-scrollable{ /* add this if you want to use modal-dialog-scrollable */
        max-height: none !important;
    }
    .modal .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem) !important;
    }
    .modal-dialog.modal-xl {
        max-width: 100vw !important;
        margin: 0;
    }
    .modal .modal-content{
        position: relative;
        width: 100%;
        border-radius: 0;
        height: 90vh;
    }


    ";
        // line 62
        echo "

</style>
<!-- choose station -->
<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"chooseStationModal\">
    <div class=\"modal-dialog\" role=\"document\" >
        <div class=\"modal-content \" style=\"background-color: #F7F9FA\">

            <div class=\"modal-body\" style=\"padding-top: 0px;padding-bottom: 0px;\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-xs-12\" style=\"padding: 25px;\">
                        ";
        // line 73
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "station_id", 1 => ""], "method") == "")) {
            // line 74
            echo "                            <h1 class=\"sectionchoix  no-margin\">
                                <span>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "StationPopupTitle", []), "html", null, true);
            echo " </span>
                            </h1>

                            <p class=\"itempopupDesc\" style=\"margin-top: 30px;  white-space: pre-line;\">
                                ";
            // line 79
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "StationPopupDescription", []), "html", null, true));
            echo "
                            </p>
                            <br/>
                        ";
        }
        // line 83
        echo "
                        ";
        // line 84
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "station_id", 1 => ""], "method") != "")) {
            // line 85
            echo "
                        <div id='wrapper' onclick=\"ShowMapsmodal()\" hidden>
                            <img id='img' style=\"background-size: cover;width: 70px;height: 70px\" src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/google_maps.png"), "html", null, true);
            echo "\" alt=\"\">

                        </div>
                        ";
        }
        // line 91
        echo "
                        <br>  <br>
                        <h3 class=\"spandesc  no-margin\" >
                            <span>
                                ";
        // line 95
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pays"], "method"), "FrontLanguage", []) == "en")) {
            echo "Choose your station from the list below";
        } else {
            echo " Choisissez votre Station dans la liste ci-dessous";
        }
        // line 96
        echo "                            </span>
                        </h3>

                        ";
        // line 117
        echo "


                        <form action=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("setStation");
        echo "\">

                            <select class=\"selectpicker\"  id=\"stationList\"  name=\"station_id\"
                                    style=\" width: 100%;border-radius: 10px;border: 1px solid #B7CBD3;height: 38px; font-family: Roboto-Regular,sans-serif; color: #B7CBD3;\">

                                <option class=\"optionp\" selected  disabled >";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(" Choisissez votre station", [], "messages"), "html", null, true);
        echo "</option>

                                ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stations"] ?? $this->getContext($context, "stations")));
        foreach ($context['_seq'] as $context["key"] => $context["station"]) {
            // line 128
            echo "                                    <optgroup   label=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" style=\"color: #ED0000\">
                                        ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["station"]);
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 130
                echo "                                            <option class=\"optionpopup \"  value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "\"  data-icon=\"glyphicon glyphicon-shopping-cart\" data-subtext=\"Heinz\" >
                                                ";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
                echo "
                                            </option>



                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                    </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                            </select>
                            <br>  <br>

                            <button class=\"btnpopup\" type=\"submit\" style=\" width: 100%;margin-top: 10px;font-size: 17px;font-family: Roboto-Regular,sans-serif;height: 38px\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider"), "html", null, true);
        echo "</button>
                        </form>





                        ";
        // line 168
        echo "

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Show  map  station -->
<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"chooseStationModalMap\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-body\" style=\"padding-top: 0px;padding-bottom: 0px;\">
                <div class=\"row\">
                    <div id='wrapper' onclick=\"ShowStationmodal()\">

                    </div>
                    <div class=\"\" id=\"googleMap\" style=\"width:100%;min-height:500px;\"></div>

                    ";
        // line 344
        echo "
                </div>
            </div>

        </div>
    </div>
</div>

";
        // line 352
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "station_id", 1 => ""], "method") == "")) {
            // line 353
            echo "    <script>
        \$(\"document\").ready(function () {
            \$('#chooseStationModal').modal({
                backdrop: 'static',
                keyboard: false
            });
            //  \$('select').select2();
        })

    </script>
    <!-- choose station -->
";
        }
        // line 365
        $this->displayBlock('script', $context, $blocks);
        // line 390
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

    // line 365
    public function block_script($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 366
        echo "
<script>
    function showSelectStation() {
        \$('#chooseStationModal').modal();

    }

    function ShowMapsmodal() {
        \$('#chooseStationModalMap').modal();
        \$('#chooseStationModal').modal('hide');

    }

    function ShowStationmodal() {
        \$('#chooseStationModal').modal('show');
        \$('#chooseStationModalMap').modal('hide');

    }
</script>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:selectStation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 366,  345 => 365,  273 => 390,  271 => 365,  257 => 353,  255 => 352,  245 => 344,  219 => 168,  209 => 142,  204 => 139,  197 => 137,  185 => 131,  180 => 130,  176 => 129,  171 => 128,  167 => 127,  162 => 125,  154 => 120,  149 => 117,  144 => 96,  138 => 95,  132 => 91,  125 => 87,  121 => 85,  119 => 84,  116 => 83,  109 => 79,  102 => 75,  99 => 74,  97 => 73,  84 => 62,  34 => 1,);
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


    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        padding: 0 !important; /* override inline padding-right added from js */
        width: 100vw !important;
        height: 100vh !important;
        outline: 0;
    }
    .modal-dialog-scrollable{ /* add this if you want to use modal-dialog-scrollable */
        max-height: none !important;
    }
    .modal .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem) !important;
    }
    .modal-dialog.modal-xl {
        max-width: 100vw !important;
        margin: 0;
    }
    .modal .modal-content{
        position: relative;
        width: 100%;
        border-radius: 0;
        height: 90vh;
    }


    {#
    fuul screen dialog
    .modal-dialog {
        max-width: 100%;
        margin: 0;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100vh;
        display: flex;
    }
    #}


</style>
<!-- choose station -->
<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"chooseStationModal\">
    <div class=\"modal-dialog\" role=\"document\" >
        <div class=\"modal-content \" style=\"background-color: #F7F9FA\">

            <div class=\"modal-body\" style=\"padding-top: 0px;padding-bottom: 0px;\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-xs-12\" style=\"padding: 25px;\">
                        {% if app.session.get(\"station_id\",\"\") == \"\" %}
                            <h1 class=\"sectionchoix  no-margin\">
                                <span>{{ app.session.get(\"pays\").StationPopupTitle }} </span>
                            </h1>

                            <p class=\"itempopupDesc\" style=\"margin-top: 30px;  white-space: pre-line;\">
                                {{ app.session.get(\"pays\").StationPopupDescription |nl2br }}
                            </p>
                            <br/>
                        {% endif %}

                        {% if app.session.get(\"station_id\",\"\")  != \"\" %}

                        <div id='wrapper' onclick=\"ShowMapsmodal()\" hidden>
                            <img id='img' style=\"background-size: cover;width: 70px;height: 70px\" src=\"{{ asset('/assets/img/google_maps.png') }}\" alt=\"\">

                        </div>
                        {% endif %}

                        <br>  <br>
                        <h3 class=\"spandesc  no-margin\" >
                            <span>
                                {% if app.session.get(\"pays\").FrontLanguage == 'en' %}Choose your station from the list below{% else %} Choisissez votre Station dans la liste ci-dessous{% endif %}
                            </span>
                        </h3>

                        {#
                               {% for key, station in stations %}

                            <div class=\"row\" >
                                <div class=\"station-region\"><b>{{ key }}</b></div>
                                {% for s in station %}
                                    <a href=\"{{ path(\"setStation\") }}?station_id={{ s.id }}\">
                                        <div class=\"col-lg-4 col-station\">
                                            <span class=\"station-title\"><i
                                                        class=\"fa fa-map-marker\"></i> {{ s.nom }}</span>
                                            <span class=\"station-address\"> {{ s.adresse }}</span>
                                        </div>
                                    </a>
                                {% endfor %}
                            </div>

                        {% endfor %}
                        #}



                        <form action=\"{{ path(\"setStation\") }}\">

                            <select class=\"selectpicker\"  id=\"stationList\"  name=\"station_id\"
                                    style=\" width: 100%;border-radius: 10px;border: 1px solid #B7CBD3;height: 38px; font-family: Roboto-Regular,sans-serif; color: #B7CBD3;\">

                                <option class=\"optionp\" selected  disabled >{{\" Choisissez votre station\" | trans({}, 'messages') }}</option>

                                {% for key, station in stations %}
                                    <optgroup   label=\"{{ key }}\" style=\"color: #ED0000\">
                                        {% for s in station %}
                                            <option class=\"optionpopup \"  value=\"{{ s.id }}\"  data-icon=\"glyphicon glyphicon-shopping-cart\" data-subtext=\"Heinz\" >
                                                {{ s.nom }}
                                            </option>



                                        {% endfor %}
                                    </optgroup>
                                {% endfor %}
                            </select>
                            <br>  <br>

                            <button class=\"btnpopup\" type=\"submit\" style=\" width: 100%;margin-top: 10px;font-size: 17px;font-family: Roboto-Regular,sans-serif;height: 38px\">{{ \"Valider\"|trans }}</button>
                        </form>





                        {#
                          <form action=\"{{ path(\"setStation\") }}\">
                    <select id=\"stationList\" name=\"station_id\" style=\" width: 78%;border-radius: 0px;height: 33px; font-family: Roboto-Regular,sans-serif\">
                        <option></option>
                        {% for key, station in stations %}
                        <option class=\"optionpopup\" selected  disabled>{{\" Choisissez votre station\" | trans }}</option>
                        <optgroup   label=\"{{ key }}\">
                            {% for s in station %}
                                <option class=\"optionpopup\"  value=\"{{ s.id }}\">{{ s.nom }}</option>

                            {% endfor %}
                        </optgroup>
                        {% endfor %}
                    </select>

                    <button class=\"btnpopup\" type=\"submit\" style=\"\">{{ \"Valider\"|trans }}</button>
                </form>

                        #}


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Show  map  station -->
<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"chooseStationModalMap\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-body\" style=\"padding-top: 0px;padding-bottom: 0px;\">
                <div class=\"row\">
                    <div id='wrapper' onclick=\"ShowStationmodal()\">

                    </div>
                    <div class=\"\" id=\"googleMap\" style=\"width:100%;min-height:500px;\"></div>

                    {#


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
                }
            });

        }
        function myMap() {



                var mapProp= {
                    center:new google.maps.LatLng( 0, 0),
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





        }

        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    alert(\"User denied the request for Geolocation.\")
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert(\"Location information is unavailable.\")
                    break;
                case error.TIMEOUT:
                    alert(\"The request to get user location timed out.\")

                    break;
                case error.UNKNOWN_ERROR:
                    alert(\"An unknown error occurred.\")
                    break;
            }
        }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDYhfYs2iY5PFut6nyg40SkRzC4iiJk98A&callback=myMap\"></script>

                    #}

                </div>
            </div>

        </div>
    </div>
</div>

{% if app.session.get(\"station_id\",\"\") == \"\" %}
    <script>
        \$(\"document\").ready(function () {
            \$('#chooseStationModal').modal({
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
    function showSelectStation() {
        \$('#chooseStationModal').modal();

    }

    function ShowMapsmodal() {
        \$('#chooseStationModalMap').modal();
        \$('#chooseStationModal').modal('hide');

    }

    function ShowStationmodal() {
        \$('#chooseStationModal').modal('show');
        \$('#chooseStationModalMap').modal('hide');

    }
</script>




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

", "FrontendBundle:Default:selectStation.html.twig", "C:\\wamp64\\www\\eshop\\src\\FrontendBundle/Resources/views/Default/selectStation.html.twig");
    }
}

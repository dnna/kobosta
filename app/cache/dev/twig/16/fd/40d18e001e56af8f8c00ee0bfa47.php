<?php

/* KobostaSiteBundle::tshirts.html.twig */
class __TwigTemplate_16fd40d18e001e56af8f8c00ee0bfa47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"tshirts-content\">
    <div id=\"tshirts-prevmonth\">
        <a href=\"javascript:void(0)\" class=\"rightarrow\"><img class=\"arrow\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\"></a>
    </div>
    <div id=\"tshirts-nextmonth\">
        <a href=\"javascript:void(0)\" class=\"leftarrow\"><img class=\"arrow\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\"></a>
    </div>
    <div id=\"tshirts-pic\">
        ";
        // line 10
        echo "    </div>
    <div id=\"tshirts-text\">
        AUGUST / FISH<span>DESIGN</span> / 72<span>LEFT</span>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "KobostaSiteBundle::tshirts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  27 => 6,  21 => 3,  17 => 1,);
    }
}

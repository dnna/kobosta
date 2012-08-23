<?php

/* KobostaSiteBundle::welcome.html.twig */
class __TwigTemplate_8205bd6c0f59b76280843fee2312171a extends Twig_Template
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
        echo "<div id='welcome-page'>
    <div id='logo'>
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/unselected_logo.png"), "html", null, true);
        echo "\" id=\"logounselected\" alt=\"Logo\" />
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/selected_logo.png"), "html", null, true);
        echo "\" id=\"logoselected\" alt=\"Logo\" />
    </div>
    <div id='logo-text'>
        EACHMONTH / ONEDESIGN / IOOTSHIRTS
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "KobostaSiteBundle::welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 3,  17 => 1,);
    }
}

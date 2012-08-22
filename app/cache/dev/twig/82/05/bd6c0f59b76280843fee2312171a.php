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
        echo "<div id='logo'>
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/unselected_logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
</div>
<div id='logo-text'>
    EACHMONTH / ONEDESIGN / IOOTSHIRTS
</div>
<div id='move-to-tshirts'>
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
        return array (  20 => 2,  17 => 1,);
    }
}

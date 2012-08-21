<?php

/* KobostaSiteBundle::layout.html.twig */
class __TwigTemplate_c397c2150b88a840291ba8736b220fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"welcome-page\">
            ";
        // line 11
        $this->env->loadTemplate("KobostaSiteBundle::welcome.html.twig")->display($context);
        // line 12
        echo "        </div>
        <div id=\"tshirt-slideshow-page\">
            ";
        // line 14
        $this->env->loadTemplate("KobostaSiteBundle::tshirt-slideshow.html.twig")->display($context);
        // line 15
        echo "        </div>
        <div id=\"order-page\">
            ";
        // line 17
        $this->env->loadTemplate("KobostaSiteBundle::order.html.twig")->display($context);
        // line 18
        echo "        </div>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Kobosta.com";
    }

    public function getTemplateName()
    {
        return "KobostaSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  53 => 18,  51 => 17,  47 => 15,  45 => 14,  41 => 12,  39 => 11,  32 => 7,  28 => 6,  24 => 5,  18 => 1,);
    }
}

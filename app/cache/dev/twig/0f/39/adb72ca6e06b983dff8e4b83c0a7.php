<?php

/* KobostaSiteBundle::order.html.twig */
class __TwigTemplate_0f39adb72ca6e06b983dff8e4b83c0a7 extends Twig_Template
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
        echo "<div id=\"order-content\">
    <div id=\"order-left\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("public/images/monthly/" . twig_date_format_filter($this->env, "now", "m_Y")) . "/order.png")), "html", null, true);
        echo "\" />
        <div id='order-bottom'>
            <h1>FISH DESIGN</h1>
            The travel experience should be much more authentic and unique for each of us. Enough with the boring and copy-paste travels. Enough with the mediocre and rigid tour guide experiences.
        </div>
    </div>
    <div id=\"order-right\">
        <div id='order-description'>
            <h1>ABOUT KOBOSTA</h1>
            <p>The travel experience should be much more authentic and unique for each of us. Enough with the boring and copy-paste travels. Enough with the mediocre and rigid tour guide experiences. Enough with the inability to feel the true side of a location. The best travel stories come from trips that you knew that special someone who opened your eyes and took you off the beaten path.</p>
            <p>Let's create an amazing community of people who have the time and desire to show visitors the true colors of a place. Let's open up every last square mile of this world to be safe, unique and breataking to step onto. Let's make traveling better and let's never look back. We have the means and we have the passion to do so.
        </div>
        <div id='order-sizes'>
            <h1>SIZES</h1>
            S M L XL XXL
        </div>
        <div id='order-now-button'>
            ORDER NOW
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "KobostaSiteBundle::order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  21 => 3,  17 => 1,);
    }
}

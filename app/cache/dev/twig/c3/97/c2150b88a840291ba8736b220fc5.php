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
        <div id=\"wrapper\">
            <div id=\"mask\">
                <div id=\"welcome\" class=\"item\">
                    <div class=\"bottom\">
                        <a href=\"#tshirts\" class=\"panel downarrow\"><img class=\"arrow\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\"></a>
                    </div>
                    <div class=\"content\">
                        ";
        // line 18
        $this->env->loadTemplate("KobostaSiteBundle::welcome.html.twig")->display($context);
        // line 19
        echo "                    </div>
                </div>
                <div id=\"tshirts\" class=\"item\">
                    <div class=\"top\">
                        <a href=\"#welcome\" class=\"panel uparrow\"><img class=\"arrow\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\"></a>
                    </div>
                    <div class=\"bottom\">
                        <a href=\"#order\" class=\"panel downarrow\"><span>ORDER</span><img class=\"arrow\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\"></a>
                    </div>
                    <div class=\"content\">
                        <table>
                            <tr>
                                <td>
                                    ";
        // line 32
        $this->env->loadTemplate("KobostaSiteBundle::tshirts.html.twig")->display($context);
        // line 33
        echo "                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id=\"order\" class=\"item\">
                    <div class=\"top\">
                        <a href=\"#tshirts\" class=\"panel uparrow\"><img class=\"arrow\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\"></a>
                    </div>
                    <div class=\"content\">
                        <table>
                            <tr>
                                <td>
                                    ";
        // line 46
        $this->env->loadTemplate("KobostaSiteBundle::order.html.twig")->display($context);
        // line 47
        echo "                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/lib/jquery.scrollTo-1.4.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/lib/jquery.transitionBox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/main.js"), "html", null, true);
        echo "\"></script>
        <script>
            var arrowUrl = \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\";
            var selectedArrowUrl = \"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/selectedarrow.png"), "html", null, true);
        echo "\";
            var unselectedLogoUrl = \"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/selected_logo.png"), "html", null, true);
        echo "\";
            var selectedLogoUrl = \"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/unselected_logo.png"), "html", null, true);
        echo "\";

            ";
        // line 65
        echo "            var monthlyTshirts = {};
            ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array("08_2012" => "public/images/monthly/08_2012", "09_2012" => "public/images/monthly/09_2012"));
        foreach ($context['_seq'] as $context["date"] => $context["tshirt"]) {
            // line 67
            echo "                monthlyTshirts['";
            echo twig_escape_filter($this->env, $this->getContext($context, "date"), "html", null, true);
            echo "'] = '";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "tshirt")), "html", null, true);
            echo "';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['tshirt'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
        echo "        </script>
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
        return array (  158 => 6,  152 => 69,  141 => 67,  137 => 66,  134 => 65,  129 => 62,  125 => 61,  121 => 60,  117 => 59,  112 => 57,  108 => 56,  104 => 55,  94 => 47,  92 => 46,  83 => 40,  74 => 33,  72 => 32,  63 => 26,  57 => 23,  51 => 19,  49 => 18,  43 => 15,  32 => 7,  28 => 6,  24 => 5,  18 => 1,);
    }
}

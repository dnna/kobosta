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
                    <div class=\"bottomleft\">
                        KOBOSTACOM
                    </div>
                    <div class=\"content\">
                        ";
        // line 21
        $this->env->loadTemplate("KobostaSiteBundle::welcome.html.twig")->display($context);
        // line 22
        echo "                    </div>
                </div>
                <div id=\"tshirts\" class=\"item\">
                    <div class=\"topright\">
                        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_FB.png"), "html", null, true);
        echo "\" class=\"fb\" alt=\"FB\" />
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_TWITTER.png"), "html", null, true);
        echo "\" class=\"twitter\" alt=\"Twitter\" />
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_BLOG.png"), "html", null, true);
        echo "\" class=\"blog\" alt=\"Mail\" />
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_MAIL.png"), "html", null, true);
        echo "\" class=\"mail\" alt=\"Blog\" />
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_INFO.png"), "html", null, true);
        echo "\" class=\"info\" alt=\"Info\" />
                    </div>
                    <div class=\"bottomleft\">
                        KOBOSTACOM
                    </div>
                    <div class=\"top\">
                        <a href=\"#welcome\" class=\"panel uparrow\"><img class=\"arrow\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\"></a>
                    </div>
                    <div class=\"bottom\">
                        <a href=\"#order\" class=\"panel downarrow\"><span>ORDER</span><img class=\"arrow\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\"></a>
                    </div>
                    <div class=\"content\">
                        <table>
                            <tr>
                                <td>
                                    ";
        // line 45
        $this->env->loadTemplate("KobostaSiteBundle::tshirts.html.twig")->display($context);
        // line 46
        echo "                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id=\"order\" class=\"item\">
                    <div class=\"top\">
                        <a href=\"#tshirts\" class=\"panel uparrow\"><img class=\"arrow\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\"></a>
                    </div>
                    <div class=\"topright\">
                        <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_FB.png"), "html", null, true);
        echo "\" class=\"fb\" alt=\"FB\" />
                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_TWITTER.png"), "html", null, true);
        echo "\" class=\"twitter\" alt=\"Twitter\" />
                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_BLOG.png"), "html", null, true);
        echo "\" class=\"blog\" alt=\"Mail\" />
                        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_MAIL.png"), "html", null, true);
        echo "\" class=\"mail\" alt=\"Blog\" />
                        <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_INFO.png"), "html", null, true);
        echo "\" class=\"info\" alt=\"Info\" />
                    </div>
                    <div class=\"bottomleft\">
                        KOBOSTACOM
                    </div>
                    <div class=\"content\">
                        <table>
                            <tr>
                                <td>
                                    ";
        // line 69
        $this->env->loadTemplate("KobostaSiteBundle::order.html.twig")->display($context);
        // line 70
        echo "                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/lib/jquery.scrollTo-1.4.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/lib/jquery.transitionBox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/main.js"), "html", null, true);
        echo "\"></script>
        <script>
            var arrowUrl = \"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/arrow.png"), "html", null, true);
        echo "\";
            var selectedArrowUrl = \"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/selectedarrow.png"), "html", null, true);
        echo "\";
            var unselectedLogoUrl = \"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/unselected_logo.png"), "html", null, true);
        echo "\";
            var selectedLogoUrl = \"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/selected_logo.png"), "html", null, true);
        echo "\";

            var fbUrl = \"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_FB.png"), "html", null, true);
        echo "\";
            var selectedFbUrl = \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/SELECTED_FB.png"), "html", null, true);
        echo "\";
            var twitterUrl = \"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_TWITTER.png"), "html", null, true);
        echo "\";
            var selectedTwitterUrl = \"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/SELECTED_TWITTER.png"), "html", null, true);
        echo "\";
            var blogUrl = \"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_BLOG.png"), "html", null, true);
        echo "\";
            var selectedBlogUrl = \"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/SELECTED_BLOG.png"), "html", null, true);
        echo "\";
            var mailUrl = \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_MAIL.png"), "html", null, true);
        echo "\";
            var selectedMailUrl = \"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/SELECTED_MAIL.png"), "html", null, true);
        echo "\";
            var infoUrl = \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/UNSELECTED_INFO.png"), "html", null, true);
        echo "\";
            var selectedInfoUrl = \"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/SELECTED_INFO.png"), "html", null, true);
        echo "\";

            ";
        // line 99
        echo "            var monthlyTshirts = {};
            ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array("08_2012" => "public/images/monthly/08_2012", "09_2012" => "public/images/monthly/09_2012"));
        foreach ($context['_seq'] as $context["date"] => $context["tshirt"]) {
            // line 101
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
        // line 103
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
        return array (  252 => 6,  246 => 103,  235 => 101,  231 => 100,  228 => 99,  223 => 96,  219 => 95,  215 => 94,  211 => 93,  207 => 92,  203 => 91,  199 => 90,  195 => 89,  191 => 88,  187 => 87,  182 => 85,  178 => 84,  174 => 83,  170 => 82,  165 => 80,  161 => 79,  157 => 78,  147 => 70,  145 => 69,  133 => 60,  129 => 59,  125 => 58,  121 => 57,  117 => 56,  111 => 53,  102 => 46,  100 => 45,  91 => 39,  85 => 36,  76 => 30,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  54 => 22,  52 => 21,  43 => 15,  32 => 7,  28 => 6,  24 => 5,  18 => 1,);
    }
}

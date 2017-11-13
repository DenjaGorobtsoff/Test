<?php

/* default/template/information/partnership.twig */
class __TwigTemplate_9706a3fe3dbd62509bd88a84a132a58c657b2c3b0039fa3364d5b0d6db453fdf extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "

<div id=\"infomation-contact\" class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "        <li>
            <a href =\"";
            // line 7
            echo $this->getAttribute((isset($context["bredcrumbs"]) ? $context["bredcrumbs"] : null), "href", array());
            echo "\">";
            echo $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "text", array());
            echo "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
</div>

";
        // line 13
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/information/partnership.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  44 => 10,  33 => 7,  30 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* <div id="infomation-contact" class="container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li>*/
/*             <a href ="{{ bredcrumbs.href }}">{{ breadcrumbs.text }}</a>*/
/*         </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
/* {{ footer }}*/

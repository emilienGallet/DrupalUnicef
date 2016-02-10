<?php

/* modules/custom/u42p2/templates/manifsport-images.html.twig */
class __TwigTemplate_6e8c1a3a3309c988d6e8c92c2210d2da1ae49f14326e0df3248cffa18d57ab34 extends Twig_Template
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
        $tags = array("for" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        echo "<h1>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["lamanif"]) ? $context["lamanif"] : null), "html", null, true));
        echo "</h1>
<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["imgmanifsportive"]) {
            // line 5
            echo "\t\t<li><a href=\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["imgmanifsportive"], "refLien", array()), "html", null, true));
            echo " \"><img src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["imgmanifsportive"], "refLien", array()), "html", null, true));
            echo "\"/></a></li><br />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imgmanifsportive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "modules/custom/u42p2/templates/manifsport-images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  53 => 5,  49 => 4,  43 => 2,);
    }
}
/* {# src : ImgManifSportiveController #}*/
/* <h1>{{lamanif}}</h1>*/
/* <ul>*/
/* 	{% for imgmanifsportive in liste %}*/
/* 		<li><a href=" {{ imgmanifsportive.refLien }} "><img src="{{imgmanifsportive.refLien}}"/></a></li><br />*/
/* 	{% endfor %}*/
/* </ul>*/

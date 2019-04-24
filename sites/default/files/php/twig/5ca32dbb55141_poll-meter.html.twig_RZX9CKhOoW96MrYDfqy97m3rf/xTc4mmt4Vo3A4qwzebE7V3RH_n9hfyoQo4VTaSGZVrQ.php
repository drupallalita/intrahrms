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

/* modules/contrib/poll/templates/poll-meter.html.twig */
class __TwigTemplate_b4bf644aaf401eb73fc6cc3435c4f34356a1285a2376d484b282630173b142f2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 32];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        echo "<dt class=\"choice-title\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["choice"] ?? null)), "html", null, true);
        echo "</dt>
<dd class=\"choice-result\">
  <div";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    <div style=\"width: ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["percentage"] ?? null)), "html", null, true);
        echo "%\" class=\"foreground\"></div>
  </div>

  ";
        // line 32
        if (($context["display_value"] ?? null)) {
            // line 33
            echo "    <div class=\"percent\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["display_value"] ?? null)), "html", null, true);
            echo "</div>
  ";
        }
        // line 35
        echo "</dd>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/poll/templates/poll-meter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  73 => 33,  71 => 32,  65 => 29,  61 => 28,  55 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a meter.
 *
 * Available variables:
 * - display_value: The textual representation of the meter bar.
 * - form: One or more forms to which the <meter> element belongs; multiple
 *   forms separated by spaces.
 * - high: A number specifying the range that is considered to be a high value.
 * - low: A number specifying the range that is considered to be a low value.
 * - max: A number specifying the maximum value of the range.
 * - min: A number specifying the minimum value of the range.
 * - optimum: A number specifying what value is the optimal value for the gauge.
 * - value: A number specifying the current value of the gauge.
 * - percentage: A number specifying the current percentage of the gauge.
 * - attributes: HTML attributes for the containing element.
 * - choice: The choice of a poll.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 *
 * @ingroup themeable
 */
#}
<dt class=\"choice-title\">{{ choice }}</dt>
<dd class=\"choice-result\">
  <div{{ attributes }}>
    <div style=\"width: {{ percentage }}%\" class=\"foreground\"></div>
  </div>

  {% if display_value %}
    <div class=\"percent\">{{ display_value }}</div>
  {% endif %}
</dd>
", "modules/contrib/poll/templates/poll-meter.html.twig", "D:\\Sites\\devdesktop\\intrahrms-test\\docroot\\modules\\contrib\\poll\\templates\\poll-meter.html.twig");
    }
}

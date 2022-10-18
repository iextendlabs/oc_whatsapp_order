<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/whatsappButton/admin/view/template/module/whatsapp_button.twig */
class __TwigTemplate_7990022a25c5eaaa887bce7ca9a140809f41aa113057923ccb2b620465cf9be2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 18
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 22
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_whatsapp_button_status\" id=\"input-status\" class=\"form-select\">
\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 25
        if (($context["module_whatsapp_button_status"] ?? null)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 26
        if ( !($context["module_whatsapp_button_status"] ?? null)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-whatsapp-number\">";
        // line 31
        echo ($context["entry_whatsapp_number"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_whatsapp_number\" value=\"";
        // line 33
        echo ($context["module_whatsapp_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_whatsapp_code"] ?? null);
        echo "\" id=\"input-whatsapp-number\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-whatsapp-message\">";
        // line 37
        echo ($context["entry_whatsapp_message"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_whatsapp_message\" value=\"";
        // line 39
        echo ($context["module_whatsapp_message"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_whatsapp_message"] ?? null);
        echo "\" id=\"input-whatsapp-message\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-whatsapp-button-color\">";
        // line 43
        echo ($context["entry_whatsapp_button_color"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
              <input type=\"color\" name=\"module_whatsapp_button_color\" value=\"";
        // line 45
        echo ($context["module_whatsapp_button_color"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_whatsapp_button_color"] ?? null);
        echo "\" id=\"input-whatsapp-button-color\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-whatsapp-button-text\">";
        // line 49
        echo ($context["entry_whatsapp_button_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_whatsapp_button_text\" value=\"";
        // line 51
        echo ($context["module_whatsapp_button_text"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_whatsapp_button_text"] ?? null);
        echo "\" id=\"input-whatsapp-button-text\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 59
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/whatsappButton/admin/view/template/module/whatsapp_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 59,  166 => 51,  161 => 49,  152 => 45,  147 => 43,  138 => 39,  133 => 37,  124 => 33,  119 => 31,  107 => 26,  99 => 25,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/whatsappButton/admin/view/template/module/whatsapp_button.twig", "D:\\xampp\\htdocs\\opencart4\\whatsappButton\\extension\\whatsappButton\\admin\\view\\template\\module\\whatsapp_button.twig");
    }
}

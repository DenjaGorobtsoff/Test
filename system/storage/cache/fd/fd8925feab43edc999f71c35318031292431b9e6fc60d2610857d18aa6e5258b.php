<?php

/* design/banner_form.twig */
class __TwigTemplate_3339138eaf8e28960fd950044f4c6689145f33cf42f123f606d74c89514df119 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-banner\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-banner\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 38
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 41
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 42
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 43
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 45
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 46
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 48
        echo "              </select>
            </div>
          </div>
          <br />
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            echo "            <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "          </ul>
          <div class=\"tab-content\">
            ";
        // line 58
        $context["image_row"] = 0;
        // line 59
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 60
            echo "            <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
              <table id=\"images";
            // line 61
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
            // line 64
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 65
            echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
            echo "</td>
                    <td class=\"text-center\">";
            // line 66
            echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
            echo "</td>
                    <td class=\"text-right\">";
            // line 67
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 72
            if ($this->getAttribute((isset($context["banner_images"]) ? $context["banner_images"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 73
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["banner_images"]) ? $context["banner_images"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
                    // line 74
                    echo "                  <tr id=\"image-row";
                    echo (isset($context["image_row"]) ? $context["image_row"] : null);
                    echo "\">
                    <td class=\"text-left\"><input type=\"text\" name=\"banner_image[";
                    // line 75
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["image_row"]) ? $context["image_row"] : null);
                    echo "][title]\" value=\"";
                    echo $this->getAttribute($context["banner_image"], "title", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                    echo "\" class=\"form-control\" />
                      ";
                    // line 76
                    if ($this->getAttribute($this->getAttribute((isset($context["error_banner_image"]) ? $context["error_banner_image"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), (isset($context["image_row"]) ? $context["image_row"] : null), array(), "array")) {
                        // line 77
                        echo "                      <div class=\"text-danger\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["error_banner_image"]) ? $context["error_banner_image"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), (isset($context["image_row"]) ? $context["image_row"] : null), array(), "array");
                        echo "</div>
                      ";
                    }
                    // line 78
                    echo "</td>
                    <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"banner_image[";
                    // line 79
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["image_row"]) ? $context["image_row"] : null);
                    echo "][link]\" value=\"";
                    echo $this->getAttribute($context["banner_image"], "link", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
                    echo "\" class=\"form-control\" /></td>
                    <td class=\"text-center\"><a href=\"\" id=\"thumb-image";
                    // line 80
                    echo (isset($context["image_row"]) ? $context["image_row"] : null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo $this->getAttribute($context["banner_image"], "thumb", array());
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                    echo "\" /></a>
                      <input type=\"hidden\" name=\"banner_image[";
                    // line 81
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["image_row"]) ? $context["image_row"] : null);
                    echo "][image]\" value=\"";
                    echo $this->getAttribute($context["banner_image"], "image", array());
                    echo "\" id=\"input-image";
                    echo (isset($context["image_row"]) ? $context["image_row"] : null);
                    echo "\" /></td>
                    <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"banner_image[";
                    // line 82
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["image_row"]) ? $context["image_row"] : null);
                    echo "][sort_order]\" value=\"";
                    echo $this->getAttribute($context["banner_image"], "sort_order", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
                    echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                    // line 83
                    echo (isset($context["image_row"]) ? $context["image_row"] : null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
                    // line 85
                    $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
                    // line 86
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                  ";
            }
            // line 88
            echo "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"4\"></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"addImage('";
            // line 92
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_banner_add"]) ? $context["button_banner_add"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 104
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

function addImage(language_id) {
\thtml  = '<tr id=\"image-row' + image_row + '\">';
    html += '  <td class=\"text-left\"><input type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 108
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" class=\"form-control\" /></td>';\t
\thtml += '  <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][link]\" value=\"\" placeholder=\"";
        // line 109
        echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
        echo "\" class=\"form-control\" /></td>';\t
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + image_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 110
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"banner_image[' + language_id + '][' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\thtml += '  <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 111
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 112
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#images' + language_id + ' tbody').append(html);
\t
\timage_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script> 
</div>
";
        // line 124
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "design/banner_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 124,  353 => 112,  349 => 111,  343 => 110,  339 => 109,  335 => 108,  328 => 104,  320 => 98,  306 => 92,  300 => 88,  297 => 87,  291 => 86,  289 => 85,  282 => 83,  272 => 82,  262 => 81,  254 => 80,  244 => 79,  241 => 78,  235 => 77,  233 => 76,  223 => 75,  218 => 74,  213 => 73,  211 => 72,  203 => 67,  199 => 66,  195 => 65,  191 => 64,  185 => 61,  180 => 60,  175 => 59,  173 => 58,  169 => 56,  152 => 54,  148 => 53,  141 => 48,  136 => 46,  131 => 45,  126 => 43,  121 => 42,  119 => 41,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-banner" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-banner" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <br />*/
/*           <ul class="nav nav-tabs" id="language">*/
/*             {% for language in languages %}*/
/*             <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             {% set image_row = 0 %}*/
/*             {% for language in languages %}*/
/*             <div class="tab-pane" id="language{{ language.language_id }}">*/
/*               <table id="images{{ language.language_id }}" class="table table-striped table-bordered table-hover">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td class="text-left">{{ entry_title }}</td>*/
/*                     <td class="text-left">{{ entry_link }}</td>*/
/*                     <td class="text-center">{{ entry_image }}</td>*/
/*                     <td class="text-right">{{ entry_sort_order }}</td>*/
/*                     <td></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                   {% if banner_images[language.language_id] %}*/
/*                   {% for banner_image in banner_images[language.language_id] %}*/
/*                   <tr id="image-row{{ image_row }}">*/
/*                     <td class="text-left"><input type="text" name="banner_image[{{ language.language_id }}][{{ image_row }}][title]" value="{{ banner_image.title }}" placeholder="{{ entry_title }}" class="form-control" />*/
/*                       {% if error_banner_image[language.language_id][image_row] %}*/
/*                       <div class="text-danger">{{ error_banner_image[language.language_id][image_row] }}</div>*/
/*                       {% endif %}</td>*/
/*                     <td class="text-left" style="width: 30%;"><input type="text" name="banner_image[{{ language.language_id }}][{{ image_row }}][link]" value="{{ banner_image.link }}" placeholder="{{ entry_link }}" class="form-control" /></td>*/
/*                     <td class="text-center"><a href="" id="thumb-image{{ image_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ banner_image.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                       <input type="hidden" name="banner_image[{{ language.language_id }}][{{ image_row }}][image]" value="{{ banner_image.image }}" id="input-image{{ image_row }}" /></td>*/
/*                     <td class="text-right" style="width: 10%;"><input type="text" name="banner_image[{{ language.language_id }}][{{ image_row }}][sort_order]" value="{{ banner_image.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control" /></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#image-row{{ image_row }}, .tooltip').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set image_row = image_row + 1 %}*/
/*                   {% endfor %}*/
/*                   {% endif %}*/
/*                 </tbody>*/
/*                 <tfoot>*/
/*                   <tr>*/
/*                     <td colspan="4"></td>*/
/*                     <td class="text-left"><button type="button" onclick="addImage('{{ language.language_id }}');" data-toggle="tooltip" title="{{ button_banner_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                   </tr>*/
/*                 </tfoot>*/
/*               </table>*/
/*             </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* var image_row = {{ image_row }};*/
/* */
/* function addImage(language_id) {*/
/* 	html  = '<tr id="image-row' + image_row + '">';*/
/*     html += '  <td class="text-left"><input type="text" name="banner_image[' + language_id + '][' + image_row + '][title]" value="" placeholder="{{ entry_title }}" class="form-control" /></td>';	*/
/* 	html += '  <td class="text-left" style="width: 30%;"><input type="text" name="banner_image[' + language_id + '][' + image_row + '][link]" value="" placeholder="{{ entry_link }}" class="form-control" /></td>';	*/
/* 	html += '  <td class="text-center"><a href="" id="thumb-image' + image_row + '" data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="banner_image[' + language_id + '][' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/* 	html += '  <td class="text-right" style="width: 10%;"><input type="text" name="banner_image[' + language_id + '][' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row  + ', .tooltip\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#images' + language_id + ' tbody').append(html);*/
/* 	*/
/* 	image_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* //--></script> */
/* </div>*/
/* {{ footer }} */

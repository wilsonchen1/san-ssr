<?php $render = function ($data, $noDataOutput) {
function _id155($data, $noDataOutput = false, $parentCtx = [], $tagName = null, $sourceSlots = []) {
$_id155Proto = [
"filters" => [

],
"computed" => [

],
"computedNames" => [

],
"tagName" => "div"
];
$html = "";
$componentCtx = [
"proto" => $_id155Proto,
"sourceSlots" => $sourceSlots,
"data" => $data ? $data : (object)[],
"owner" => $parentCtx,
"slotRenderers" => []
];
if ($data) {
}
$computedNames = $componentCtx["proto"]["computedNames"];
foreach ($computedNames as $i => $computedName) {
  $data[$computedName] = $componentCtx["proto"]["computed"][$computedName]($componentCtx);
}
$html .= "<div";
if ((isset($componentCtx["data"]->{"class"}) ? $componentCtx["data"]->{"class"} : null)) {
$html .= San::attrFilter('class', San::escapeHTML(San::_classFilter((isset($componentCtx["data"]->{"class"}) ? $componentCtx["data"]->{"class"} : null))));
}
if ((isset($componentCtx["data"]->{"style"}) ? $componentCtx["data"]->{"style"} : null)) {
$html .= San::attrFilter('style', San::escapeHTML(San::_styleFilter((isset($componentCtx["data"]->{"style"}) ? $componentCtx["data"]->{"style"} : null))));
}
if ((isset($componentCtx["data"]->{"id"}) ? $componentCtx["data"]->{"id"} : null)) {
$html .= San::attrFilter('id', San::escapeHTML((isset($componentCtx["data"]->{"id"}) ? $componentCtx["data"]->{"id"} : null)));
}
$html .= ">";
if (!$noDataOutput) {
$html .= "<!--s-data:" . json_encode($componentCtx["data"], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "-->";
}
if ((isset($componentCtx["data"]->{"cond"}) ? $componentCtx["data"]->{"cond"} : null)) {
$_id157 = (isset($componentCtx["data"]->{"persons"}) ? $componentCtx["data"]->{"persons"} : null);
if (is_array($_id157) || is_object($_id157)) {
foreach ($_id157 as $_id156 => $value) {
$componentCtx["data"]->_id156 = $_id156;
$componentCtx["data"]->p = $value;
$html .= "   <h4>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"p"}->{"name"}) ? $componentCtx["data"]->{"p"}->{"name"} : null));
$html .= "</h4>   <p>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"p"}->{"email"}) ? $componentCtx["data"]->{"p"}->{"email"} : null));
$html .= "</p>   ";

}
}

}
$html .= "</div>";
return $html;
};
return call_user_func("_id155", $data, $noDataOutput);
}; ?>
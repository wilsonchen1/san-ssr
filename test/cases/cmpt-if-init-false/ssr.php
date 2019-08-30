<?php $render = function ($data, $noDataOutput) {
function _id153($data, $noDataOutput = false, $parentCtx = [], $tagName = null, $sourceSlots = []) {
$_id153Proto = [
"filters" => [

],
"computed" => [

],
"computedNames" => [

],
"tagName" => "a"
];
$html = "";
$componentCtx = [
"proto" => $_id153Proto,
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
$html .= "<a";
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
$html .= "<span";
if ((isset($componentCtx["data"]->{"title"}) ? $componentCtx["data"]->{"title"} : null)) {
$html .= San::attrFilter('title', San::escapeHTML((isset($componentCtx["data"]->{"title"}) ? $componentCtx["data"]->{"title"} : null)));
}
$html .= ">";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"text"}) ? $componentCtx["data"]->{"text"} : null));
$html .= "</span></a>";
return $html;
};
function _id152($data, $noDataOutput = false, $parentCtx = [], $tagName = null, $sourceSlots = []) {
$_id152Proto = [
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
"proto" => $_id152Proto,
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
$html .= "<h5>";
if ((isset($componentCtx["data"]->{"cond"}) ? $componentCtx["data"]->{"cond"} : null)) {
$sourceSlots = [];
$html .= call_user_func("_id153", 
(object)["title" => (isset($componentCtx["data"]->{"name"}) ? $componentCtx["data"]->{"name"} : null),
"text" => (isset($componentCtx["data"]->{"jokeName"}) ? $componentCtx["data"]->{"jokeName"} : null)], true, $componentCtx, "ui-label", $sourceSlots);
$sourceSlots = null;

}
$html .= "</h5><p><a>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"school"}) ? $componentCtx["data"]->{"school"} : null));
$html .= "</a><u>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"company"}) ? $componentCtx["data"]->{"company"} : null));
$html .= "</u></p></div>";
return $html;
};
return call_user_func("_id152", $data, $noDataOutput);
}; ?>
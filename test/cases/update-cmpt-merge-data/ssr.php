<?php $render = function ($data, $noDataOutput) {
function _id120($data, $noDataOutput = false, $parentCtx = [], $tagName = null, $sourceSlots = []) {
$_id120Proto = [
"filters" => [

],
"computed" => [

],
"computedNames" => [

],
"tagName" => "span"
];
$html = "";
$componentCtx = [
"proto" => $_id120Proto,
"sourceSlots" => $sourceSlots,
"data" => $data ? $data : (object)["title" => "title","text" => "text"],
"owner" => $parentCtx,
"slotRenderers" => []
];
if ($data) {
$componentCtx["data"]->title = isset($componentCtx["data"]->title) ? $componentCtx["data"]->title : "title";
$componentCtx["data"]->text = isset($componentCtx["data"]->text) ? $componentCtx["data"]->text : "text";
}
$computedNames = $componentCtx["proto"]["computedNames"];
foreach ($computedNames as $i => $computedName) {
  $data[$computedName] = $componentCtx["proto"]["computed"][$computedName]($componentCtx);
}
$html .= "<span";
if ((isset($componentCtx["data"]->{"title"}) ? $componentCtx["data"]->{"title"} : null)) {
$html .= San::attrFilter('title', San::escapeHTML((isset($componentCtx["data"]->{"title"}) ? $componentCtx["data"]->{"title"} : null)));
}
$html .= San::attrFilter('class', San::escapeHTML(San::_xclassFilter((isset($componentCtx["data"]->{"class"}) ? $componentCtx["data"]->{"class"} : null), "label")));
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
$html .= San::escapeHTML((isset($componentCtx["data"]->{"text"}) ? $componentCtx["data"]->{"text"} : null));
$html .= "</span>";
return $html;
};
function _id119($data, $noDataOutput = false, $parentCtx = [], $tagName = null, $sourceSlots = []) {
$_id119Proto = [
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
"proto" => $_id119Proto,
"sourceSlots" => $sourceSlots,
"data" => $data ? $data : (object)["jokeName" => "airike","school" => "none"],
"owner" => $parentCtx,
"slotRenderers" => []
];
if ($data) {
$componentCtx["data"]->jokeName = isset($componentCtx["data"]->jokeName) ? $componentCtx["data"]->jokeName : "airike";
$componentCtx["data"]->school = isset($componentCtx["data"]->school) ? $componentCtx["data"]->school : "none";
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
$sourceSlots = [];
$html .= call_user_func("_id120", 
(object)["text" => (isset($componentCtx["data"]->{"jokeName"}) ? $componentCtx["data"]->{"jokeName"} : null),
"class" => San::escapeHTML(San::_classFilter((isset($componentCtx["data"]->{"labelClass"}) ? $componentCtx["data"]->{"labelClass"} : null))) . " my-label"], true, $componentCtx, "ui-label", $sourceSlots);
$sourceSlots = null;
$html .= "</h5><p><a";
if ((isset($componentCtx["data"]->{"school"}) ? $componentCtx["data"]->{"school"} : null)) {
$html .= San::attrFilter('title', San::escapeHTML((isset($componentCtx["data"]->{"school"}) ? $componentCtx["data"]->{"school"} : null)));
}
$html .= ">";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"school"}) ? $componentCtx["data"]->{"school"} : null));
$html .= "</a><u";
if ((isset($componentCtx["data"]->{"company"}) ? $componentCtx["data"]->{"company"} : null)) {
$html .= San::attrFilter('title', San::escapeHTML((isset($componentCtx["data"]->{"company"}) ? $componentCtx["data"]->{"company"} : null)));
}
$html .= ">";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"company"}) ? $componentCtx["data"]->{"company"} : null));
$html .= "</u></p></div>";
return $html;
};
return call_user_func("_id119", $data, $noDataOutput);
}; ?>
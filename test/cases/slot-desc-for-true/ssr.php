<?php $render = function ($data, $noDataOutput) {
function _id188($data, $noDataOutput = false, $parentCtx = [], $tagName = null, $sourceSlots = []) {
$_id188Proto = [
"toggle" => function(){},
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
"proto" => $_id188Proto,
"sourceSlots" => $sourceSlots,
"data" => $data ? $data : (object)["repeat" => [1,2]],
"owner" => $parentCtx,
"slotRenderers" => []
];
if ($data) {
$componentCtx["data"]->repeat = isset($componentCtx["data"]->repeat) ? $componentCtx["data"]->repeat : [1,2];
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
$html .= "<h3>";
if (!isset($componentCtx["slotRenderers"]["_id189"])) $componentCtx["slotRenderers"]["_id189"] = function () use (&$componentCtx, &$html){
$defaultSlotRender = function ($componentCtx) {
  $html = "";
  return $html;
};
$isInserted = false;
$ctxSourceSlots = $componentCtx["sourceSlots"];
$mySourceSlots = [];
$slotName = "title";
foreach ($ctxSourceSlots as $i => $slot) {
  if (count($slot) > 1 && $slot[1] == $slotName) {
    array_push($mySourceSlots, $slot[0]);
    $isInserted = true;
  }
}
if (!$isInserted) { array_push($mySourceSlots, $defaultSlotRender); }
$slotCtx = $isInserted ? $componentCtx["owner"] : $componentCtx;
foreach ($mySourceSlots as $renderIndex => $slot) {
  $html .= $slot($slotCtx);
}
};
call_user_func($componentCtx["slotRenderers"]["_id189"]);
$html .= "</h3>";
if (!(isset($componentCtx["data"]->{"hidden"}) ? $componentCtx["data"]->{"hidden"} : null)) {
$_id191 = (isset($componentCtx["data"]->{"repeat"}) ? $componentCtx["data"]->{"repeat"} : null);
if (is_array($_id191) || is_object($_id191)) {
foreach ($_id191 as $_id190 => $value) {
$componentCtx["data"]->_id190 = $_id190;
$componentCtx["data"]->i = $value;
if (!isset($componentCtx["slotRenderers"]["_id192"])) $componentCtx["slotRenderers"]["_id192"] = function () use (&$componentCtx, &$html){
$defaultSlotRender = function ($componentCtx) {
  $html = "";
  return $html;
};
$isInserted = false;
$ctxSourceSlots = $componentCtx["sourceSlots"];
$mySourceSlots = [];
if (count($ctxSourceSlots) > 0 && !isset($ctxSourceSlots[0][1])) {
  array_push($mySourceSlots, $ctxSourceSlots[0][0]);
  $isInserted = true;
}
if (!$isInserted) { array_push($mySourceSlots, $defaultSlotRender); }
$slotCtx = $isInserted ? $componentCtx["owner"] : $componentCtx;
foreach ($mySourceSlots as $renderIndex => $slot) {
  $html .= $slot($slotCtx);
}
};
call_user_func($componentCtx["slotRenderers"]["_id192"]);

}
}

}
$html .= "</div>";
return $html;
};
function _id187($data, $noDataOutput = false, $parentCtx = [], $tagName = null, $sourceSlots = []) {
$_id187Proto = [
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
"proto" => $_id187Proto,
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
$sourceSlots = [];
array_push($sourceSlots, [function ($componentCtx) {
  $html = "";
$html .= "<p>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"desc"}) ? $componentCtx["data"]->{"desc"} : null));
$html .= "</p>";
  return $html;
}]);
array_push($sourceSlots, [function ($componentCtx) {
  $html = "";
$html .= "<b>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"name"}) ? $componentCtx["data"]->{"name"} : null));
$html .= "</b>";

  return $html;
}, "title"]);
$html .= call_user_func("_id188", 
(object)["hidden" => (isset($componentCtx["data"]->{"folderHidden"}) ? $componentCtx["data"]->{"folderHidden"} : null)], true, $componentCtx, "x-folder", $sourceSlots);
$sourceSlots = null;
$html .= "</div>";
return $html;
};
return call_user_func("_id187", $data, $noDataOutput);
}; ?>
<script type="text/javascript">
$(document).ready(function(){
    function jsonEscape(str)  {
        return str.replace(/\n/g, "\\\\n").replace(/\r/g, "\\\\r").replace(/\t/g, "\\\\t");
    }
    var jsonArr = [];
    jsonArr = JSON.parse(jsonEscape('<?php echo json_encode(getTranslationArr(),JSON_UNESCAPED_UNICODE); ?>'));
    var selectorArr = ["label","th","span","a","p","h1","h2","h3","h4","h5","h6"];
    var selectorLength = selectorArr.length;
    setTimeout(function(){ 
        for (var i = 0; i < selectorLength; i++) {
            console.log(selectorArr[i]);
            $(selectorArr[i]).each(function(){
                 var searchKey = "";
                 searchKey = $.trim($(this).text()).replace(/ /g, "-").toLowerCase();
                 searchKey = searchKey.replace(',','');
                if(searchKey!=""){
                    if(jsonArr[searchKey]){
                        //$(this).text(jsonArr[searchKey]);
                        $(this).html($(this).html().replace($(this).text(),jsonArr[searchKey]));
                    }
                }else{
                    console.log(selectorArr[i]+" - "+searchKey+" "+jsonArr[searchKey]);
                }
            });
        }
        console.log('translation done......');
    }, 1500);
});
</script>
<?php /*include("resources/lang/translation-script.php");*/ ?>
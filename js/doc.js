
var id = document.getElementById('temp-id').value;
var account = document.getElementById('temp-account').value;
function onupdate(){
    $.ajax({
   type: "get",
   url: "getdata.php",
   data: "id="+ id +"&chapter=" + document.getElementById("chapter").value,
   success: function(msg){
     document.getElementById("result").innerHTML = msg;
   }
 });
 checkchap();
}

function checkchap(){
    var currentchap = document.getElementById("chapter").value;
    var maxchap = document.querySelectorAll('#chapter option').length;
    if(currentchap == maxchap){
        document.getElementById("nextchap").style.display = "none";
    }
    else{
        document.getElementById("nextchap").style.display = "block";
    }
    if(currentchap == 1){
        document.getElementById("prechap").style.display = "none";
    }
    else{
        document.getElementById("prechap").style.display = "block";
    }
}

function onprechap(){
    document.getElementById("chapter").value = parseInt(document.getElementById("chapter").value) - 1;
    location.href = "#result";
    onupdate();
}

function onnextchap(){
    document.getElementById("chapter").value =parseInt(document.getElementById("chapter").value) + 1;
    location.href = "#result";
    onupdate();
}

function loadcomment(){
    $.ajax({
   type: "get",
   url: "getcomment.php",
   data: "story_id=" + id,
   success: function(msg){
     document.getElementById("commentframe").innerHTML = msg;
   }
    });
}

function comment(){
    var textComment = document.getElementById("textcomment").value;
    var filter = /^[\.\,\sa-zA-Z_ÀÁÃẢẠÂẦẤẪẨẬÈÉẼẺẸÊỀẾỂỄỆĂẮẰẴẲẶĐÌÍĨỈỊÙÚỦŨỤÒÓÕỎỌÔỒỐỖỔỘỲÝỶỸỴỪƯỨỬỮỰƠỜỚỞỠỢàáảãạâầấẩẫậăằắẵẳặđèéẽẻẹêềếễểệìíĩỉịòóỏõọôồốỗổộơờớỡởợỳýỹỷỵùúũủụưứừữửự]+$/; 
    if (!filter.test(textComment) || textComment.length < 1 || textComment.length > 200)
        window.alert("Chứa kí tự không cho phép hoặc không đủ độ dài");
    else{
        document.getElementById("textcomment").value = "";
        document.getElementById("buttoncomment").style.display = "none";
        console.log(id);
        console.log(account); 
        console.log(textComment);
        $.ajax({
        type: "get",
        url: "setcomment.php",
        data: "id=" + id +"&account="+account+"&content=" + textComment,
        success: function(msg){
            console.log(msg);
            document.getElementById("buttoncomment").style.display = "block";
            loadcomment();
    }
    });
    }
}

//

onupdate();
loadcomment();
// Code By Pham Ba Toi - 1713555
(function() {

  'use strict';

  var h = document.querySelector("nav"),
    hHeight;

  function setTopPadding() {
    hHeight = h.offsetHeight;
  }

  function onScroll() {

    window.addEventListener("scroll",callbackFunc);

    function callbackFunc() {
      var y = window.pageYOffset;
      if (y > 150) {
        h.classList.add("scroll");
      } else {
        h.classList.remove("scroll");
      }
    }
  }

  window.onload = function() {
    setTopPadding();
    onScroll();
  };

  window.onresize = function() {
    setTopPadding();
  };
})();

//
var daxem = document.getElementById("daxemct");
var daluu = document.getElementById("daluuct");
var nhatky = document.getElementById("nhatkyct");
var caidat = document.getElementById("caidatct");
var isdaxem = false, isdaluu=false, isnhatky = false, iscaidat = false;
var daxembt = document.getElementById("daxem");
var daluubt = document.getElementById("daluu");
var nhatkybt = document.getElementById("nhatky");
var caidatbt = document.getElementById("caidat");
var d1 = document.getElementById("d1");
var d2 = document.getElementById("d2");
var d3 = document.getElementById("d3");
var d4 = document.getElementById("d4");
daxembt.onclick = daxemfunc;
daluubt.onclick = daluufunc;
nhatkybt.onclick = nhatkyfunc;
caidatbt.onclick = caidatfunc;

function daxemfunc(){
	if(isdaxem){
		isdaxem = false;
		daxem.innerHTML="";
		d1.innerHTML="˅";
	}
	else{
		daxem.innerHTML='<div class="row"> <div class="col-sm-1"></div> <div class="col-sm-10"> <div class="col-sm-2 mayulike"> <img class="imgS" src="images/conan.jpg" alt="conan.img"><br /><br /> <div class="hint"> <a href="https://www.google.com.vn/?hl=vi">Conan</a> <span class="inConan"> <div> <div class="imgTool"> <img class="imgHT" src="images/conan.jpg" alt="conan.img"> </div> <div class="infoTool"> <h3>Conan</h3> <p>Tác giả : Gosho Aoyama</p> <p>Thể Loại : Comedy - Trinh Thám - School Life...</p> <p>Tình Trạng : Đang tiến Hành</p> </div> <br style="clear:both;" /> </div><br /> <div class="contentTool"> <p>Nội Dung : Shinichi trong phần đầu của Thám tử lừng danh Conan được miêu tả là một thám tử học đường. Trong một lần đi chơi công viên "Miền Nhiệt đới" với cô bạn từ thuở nhỏ Ran Mori , cậu bị dính vào vụ án... </p> </div> </span> </div> </div> <div class="col-sm-2 mayulike"> <img class="imgS" src="images/hiepkhachgiangho.jpg" alt="hiepkhachgiangho.img"><br /><br /> <div class="hint"> <a href="https://www.google.com.vn/?hl=vi">Hiệp Khách Giang Hồ</a> <span class="inHKGH"> <div> <div class="imgTool"> <img class="imgHT" src="images/hiepkhachgiangho.jpg" alt="hiepkhachgiangho.img"> </div> <div class="infoTool"> <h3>Hiệp Khách Giang Hồ</h3> <p>Tác giả : JEON Geuk Jin</p> <p>Thể Loại : Action - Adventure - Manhwa...</p> <p>Tình Trạng : Đang tiến Hành</p> </div> <br style="clear:both;" /> </div><br /> <div class="contentTool"> <p>Nội Dung : Câu chuyện xoay quanh nhân vật chính : Hàn Bảo Quân, một kẻ không có võ công nhưng lại có khinh công tuyệt đỉnh và tài bắt chước võ công của người khác. Cùng với Đàm Hoa Liên, cháu gái của Kiếm Hoàng, họ bị cuốn vào bí mật của Phục Ma Hoa Linh Kiếm... </p> </div> </span> </div> </div> <div class="col-sm-2 mayulike"> <img class="imgS" src="images/deathnote.jpg" alt="deathnote.img"><br /><br /> <div class="hint"> <a href="https://www.google.com.vn/?hl=vi">Death Note</a> <span class="inDeathNote"> <div> <div class="imgTool"> <img class="imgHT" src="images/deathnote.jpg" alt="deathnote.img"> </div> <div class="infoTool"> <h3>Death Note</h3> <p>Tác giả : Takeshi Obata</p> <p>Thể Loại : Action - Adventure - Horror...</p> <p>Tình Trạng : Hoàn Thành</p> </div> <br style="clear:both;" /> </div><br /> <div class="contentTool"> <p>Nội Dung : Yagami Raito là một học sinh cấp III rất thông minh nhưng luôn cảm thấy cuộc sống xung quanh thật tẻ nhạt và phẫn nộ với những tội ác trên thế giới. Cuộc sống của Yagami chỉ thay đổi sau khi cậu tình cờ nhặt được một cuốn sổ kỳ bí có tên"Death Note"... </p> </div> </span> </div> </div> <div class="col-sm-2 mayulike"> <img class="imgS" src="images/dauphathuongkhung.jpg" alt="dauphathuongkhung.img"><br /><br /> <div class="hint"> <a href="https://www.google.com.vn/?hl=vi">Đấu Phá Thương Khung</a> <span class="inDPTK"> <div> <div class="imgTool"> <img class="imgHT" src="images/dauphathuongkhung.jpg" alt="dauphathuongkhung.img"> </div> <div class="infoTool"> <h3>Đấu Phá Thương Khung</h3> <p>Tác giả : Thiên Tằm Thổ Đậu</p> <p>Thể Loại : Action - Adventure - Manhua ...</p> <p>Tình Trạng : Đang Tiến Hành</p> </div> <br style="clear:both;" /> </div><br /> <div class="contentTool"> <p>Nội Dung : Hệ Thống Tu Luyện : Đấu Giả, Đấu Sư, Đại Đấu Sư, Đấu Linh, Đấu Vương, Đấu Hoàng, Đấu Tông, Đấu Tôn, Đấu Thánh, Đấu Đế.<br /> Hãy Bắt Đầu Từ Tiêu Viêm ! Một thiên tài tu luyện trong phút chốc trở thành phế vật, từ phế vật lại từng bước khẳng định lại chính mình... </p> </div> </span> </div> </div> <div class="col-sm-2 mayulike"> <img class="imgS" src="images/phongkhoithuonglam.jpg" alt="phongkhoithuonglam.img"><br /><br /> <div class="hint"> <a href="https://www.google.com.vn/?hl=vi">Phong Khởi Thương Lam</a> <span class="inPKTL"> <div> <div class="imgTool"> <img class="imgHT" src="images/phongkhoithuonglam.jpg" alt="phongkhoithuonglam.img"> </div> <div class="infoTool"> <h3>Phong Khởi Thương Lam</h3> <p>Tác giả : Đang Cập Nhật</p> <p>Thể Loại : Action - Adventure - Manhua...</p> <p>Tình Trạng : Đang tiến Hành</p> </div> <br style="clear:both;" /> </div><br /> <div class="contentTool"> <p>Nội Dung : Tình hình là nàng ghiền game. Một hôm vô tình bị lạc vào thế giới Game, và đã gặp được chàng, cuộc sống ảo đen xen đời thực. Đâu là thực đâu là giả, thôi thì cứ yêu thôi... </p> </div> </span> </div> </div> </div> </div>';
		isdaxem = true;
		d1.innerHTML="˄"
	}
}
function daluufunc(){
	if(isdaluu){
		isdaluu = false;
		daluu.innerHTML='';
		d2.innerHTML="˅";
	}
	else{
		daluu.innerHTML='<div class="row"> <div class ="col-md-3 col-sm-6"><img src="images/listhavesave.png" /><br /><a class="listsave">Ten LIST</a></div> <div class ="col-md-3 col-sm-6"><img src="images/listhavesave.png" /><br /><a class="listsave">Ten LIST</a></div> <div class ="col-md-3 col-sm-6"><img src="images/listhavesave.png" /><br /><a class="listsave">Ten LIST</a></div> <div class ="col-md-3 col-sm-6"><img src="images/listhavesave.png" /><br /><a class="listsave">Ten LIST</a></div><div class ="col-md-3 col-sm-6"><img src="images/listhavesave.png" /><br /><a class="listsave">Ten LIST</a></div> <div class ="col-md-3 col-sm-6"><img src="images/listhavesave.png" /><br /><a class="listsave">Ten LIST</a></div> <div class ="col-md-3 col-sm-6"><img src="images/listhavesave.png" /><br /><a class="listsave">Ten LIST</a></div> <div class ="col-md-3 col-sm-6"><img src="images/listhavesave.png" /><br /><a class="listsave">Ten LIST</a></div> </div>';
		isdaluu = true;
		d2.innerHTML="˄"
	}
}
function nhatkyfunc(){
	if(isnhatky){
		isnhatky = false;
		nhatky.innerHTML="";
		d3.innerHTML="˅";
	}
	else{
		nhatky.innerHTML='<div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div><div class="col-sm-3"><p class="timedo">11:00GMT 16/10/2019</p></div><div class="col-sm-9"><p class="comment">You have comment at topic Naturo chapter 789: Sao truyen cu hoi uc mai nhi</p></div>                       ';
		isnhatky = true;
		d3.innerHTML="˄"
	}
}
function caidatfunc(){
	if(iscaidat){
		iscaidat = false;
		caidat.innerHTML="";
		d4.innerHTML="˅";
	}
	else{
		caidat.innerHTML='<form><span class="label">Gender:</span><br /> <input type="text" class = "text" /><br /><span class="label">Email:</span><br /> <input type="text" class = "text" /><br /><span class="label">Quote:</span> <br /><input type="text" class = "text" /><br /><span class="label">Old password:</span><br /> <input type="text" class = "text" /><br /><span class="label">New password:</span><br /> <input type="text" class = "text" /><br /><span class="label">Confirm new password:</span><br /> <input type="text" class = "text" /><br /><input type="submit" class="submitb" value="Save" /></form>';
		iscaidat = true;
		d4.innerHTML="˄";
	}
}

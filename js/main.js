$(document).ready(function(){

//display- Admin information
  function admin_data() {
    $.ajax({
      url:"../action.php",
      method:"POST",
      data:{admin_data:1},
      success:function(data){
        $("#admin_data").html(data);
      }
    })
  }

//Admin- Instructors details
  function instructor() {
    $.ajax({
      url:"../action.php",
      method:"POST",
      data:{instructor:1},
      success:function(data){
       $("#instructor").html(data);
      //alert(data)
      }
    })
  }
  instructor();

//admin- Students display
  function student() {
    $.ajax({
      url:"../action.php",
      method:"POST",
      data:{student:1},
      success:function(data){
       $("#student").html(data);
      //alert(data)
      }
    })
  }
  student();


//Admin- update information
  admin_data();
  $("body").delegate(".update","click",function(event){
    var fname=$(".fname").val();
    var lname=$(".lname").val();
    var uname=$(".uname").val();
    var pno=$(".pno").val();
    var email=$(".email").val();
    var psw=$(".psw").val();
    $.ajax({
      url:"../action.php",
      method:"POST",
      data:{update:1,fname:fname,lname:lname,uname:uname,pno:pno,email:email,psw:psw},
      success:function(data){
        alert(data)
      }
    })
  })


//students

//Display- Students information
function student_data(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{student_data:1},
    success:function(data){
      $("#student_data").html(data);
    }
  })
}
student_data();


//Update- Student information
// student_data();

//Display- enrolled courses
function ENROLLED(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{ENROLLED:1},
    success:function(data){
      $('#ENROLLED').html(data);
    }
  })
}
ENROLLED();

//display enrolled students for courses
function enrolledstudentscourses(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{enrolledstudentscourses:1},
    success:function(data){
      $('#enrolledstudentscourses').html(data);
    }
  })
}

//Instructor- display information
function instructor_data(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{instructor_data:1},
    success:function(data){
      $("#instructor_data").html(data);
    }
  })
}
instructor_data();

function displaycourses(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{displaycourses:1},
    success:function(data){
      $("#displaycourses").html(data);
      // alert(data)
    }
  })
}
displaycourses();

$("body").delegate("#courseupdate","click",function(event){
  event.preventDefault();
  var cid=$(this).attr('cid');
  var cname=$(".name-"+cid).val();
  var cat=$(".category-"+cid).val();
  var date=$(".date-"+cid).val();
  var mod1=$(".mod1-"+cid).val();
  var mod2=$(".mod2-"+cid).val();
  var mod3=$(".mod3-"+cid).val();
  var mod4=$(".mod4-"+cid).val();
  var mod5=$(".mod5-"+cid).val();
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{courseupdate:1,cid:cid,cname:cname,cat:cat,date:date,mod1:mod1,mod2:mod2,mod3:mod3,mod4:mod4,mod5:mod5},
    success:function(data){
       alert(data)
    }
  })
})

$("body").delegate("#coudel","click",function(event){
  event.preventDefault();
  var cid=$(this).attr('cid');
  //alert(cid)
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{coudel:1,cid:cid},
    success:function(data){
       alert(data)
    }
  })
})

$("body").delegate(".instsearch","click",function(event){
  event.preventDefault();
  $("#instdetail").show();
  var instid=$("#instdetail1").val();
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{instsearch:1,instid:instid},
    success:function(data){
      $("#instructor-search").html(data);
    }
  })
})
$("body").delegate(".stdsearch","click",function(event){
  event.preventDefault();
  $("#stddetail").show();
  var instid=$("#sdetail").val();
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{stdsearch:1,instid:instid},
    success:function(data){
     $("#student-complete").html(data);
    }
  })
})


$("body").delegate(".delcourse","click",function(event){
  event.preventDefault();
  var cid=$(this).attr('cid');
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{delcor:1,cid:cid},
    success:function(data){
     alert(data)
    }
  })
})


$("body").delegate(".enroll","click",function(event){
  event.preventDefault();
  var cid=$(this).attr('cid');
  var iid=$(this).attr('iid');
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{enroll:1,cid:cid,iid:iid},
    success:function(data){
     alert(data)
    }
  })
})


$("body").delegate(".delbtn","click",function(event){
  event.preventDefault();
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{delbtn:1},
    success:function(data){
    }
  })
})


//display provided courses

//Courses- display --------------
//AI
function AI(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{AI:1},
    success:function(data){
      $("#AI").html(data);
    }
  })
}
AI();

//Android
function ANDROID(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{ANDROID:1},
    success:function(data){
      $('#ANDROID').html(data);
    }
  })
}
ANDROID();

//Blockchain
function BLOCKCHAIN(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{BLOCKCHAIN:1},
    success:function(data){
      $('#BLOCKCHAIN').html(data);
    }
  })
}
BLOCKCHAIN();

//C
function CPROGRAM(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{CPROGRAM:1},
    success:function(data){
      $('#CPROGRAM').html(data);
    }
  })
}
CPROGRAM();

function CYBER(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{CYBER:1},
    success:function(data){
      $('#CYBER').html(data);
    }
  })
}
CYBER();

//Database
function DATA(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{DATA:1},
    success:function(data){
      $('#DATA').html(data);
    }
  })
}
DATA();

//DataScience
function DATASCIENCE(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{DATASCIENCE:1},
    success:function(data){
      $('#DATASCIENCE').html(data);
    }
  })
}
DATASCIENCE();

//DeepLearning
function DEEPLEARNING(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{DEEPLEARNING:1},
    success:function(data){
      $('#DEEPLEARNING').html(data);
    }
  })
}
DEEPLEARNING();

//Java
function JAVA(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{JAVA:1},
    success:function(data){
      $('#JAVA').html(data);
    }
  })
}
JAVA();

//JavaScript
function JAVASCRIPT(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{JAVASCRIPT:1},
    success:function(data){
      $('#JAVASCRIPT').html(data);
    }
  })
}
JAVASCRIPT();

//MachineLearning
function ML(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{ML:1},
    success:function(data){
      $('#ML').html(data);
    }
  })
}
ML();

//Natural-Language-Processing
function NATURALLP(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{NATURALLP:1},
    success:function(data){
      $('#NATURALLP').html(data);
    }
  })
}
NATURALLP();

//Programing
function PROGRAMING(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{PROGRAMING:1},
    success:function(data){
      $('#PROGRAMING').html(data);
    }
  })
}
PROGRAMING();

//Python
function PYTHON(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{PYTHON:1},
    success:function(data){
      $('#PYTHON').html(data);
    }
  })
}
PYTHON();

//R
function RPROGRAM(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{RPROGRAM:1},
    success:function(data){
      $('#RPROGRAM').html(data);
    }
  })
}
RPROGRAM();

//Web-Development
function WEB(){
  $.ajax({
    url: "../action.php",
    method: "POST",
    data:{WEB:1},
    success:function(data){
      $('#WEB').html(data);
    }
  })
}
WEB();

});

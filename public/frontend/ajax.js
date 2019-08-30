$(function(){
  $("#contactForm").on("submit", function(e){
    e.preventDefault();
    var form=$(this);
    var url =form.attr("action");
    var type=form.attr("method");
    var data=form.serialize();

    $.ajax({
      url:url,
      data:data,
      type:type,
      dataType:"JSON",

      beforeSend:function(){
          $(".load").fadeIn();
      },
      success:function(data){
      if(data=="success"){
        $("#exampleModal").modal("hide");
        swal("Great","Insert customer data Successfully!!","success");
        

      }

      },
      complete:function(){
        $(".load").fadeOut();

      },
    });

  });
  });

$("#state").change(function(event){
    $.get("towns/"+event.target.value+"",function(response, state){
      $("#town").empty();
      for(i=0;i<response.length;i++){
      $("#town").append("<option value='"+response[i].id+"'> "+response[i].name+"</option>");
      }
    });
    });
    $("#town").change(function(event){
      $.get("locations/"+event.target.value+"",function(response, town){
        $("#location").empty();
        for(i=0;i<response.length;i++){
        $("#location").append("<option value='"+response[i].id+"'> "+response[i].name+"</option>");
        }
      });
      });
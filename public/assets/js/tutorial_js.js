/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){

  if(typeof(Storage) !== "undefined") {
      console.log("ueeee");
      var stored_data = JSON.parse(localStorage.getItem('info2'))["posts"];
      stored_data.forEach(function(post){
          var new_post = "<h1>"+post['field1']+"</h1><br><p>"+post['field2']+"</p>";
          $("#posts").append(new_post);
          console.log(new_post);
      });
  }

});

function save(){
    if(typeof(Storage) !== "undefined") {
        var retrievedObject = localStorage.getItem('info2');
        var info = collect_data();
        add(info);
        if(!retrievedObject){
            var new_info = {};
            new_info["posts"] = new Array();
        }else{
            var new_info = JSON.parse(localStorage.getItem('info2'));
        }
        console.log(info);
        console.log(new_info);        
        var posts = new_info["posts"];
        posts.push(info);
        new_info["posts"] = posts;
        localStorage.setItem('info2', JSON.stringify(new_info));
        console.log('retrievedObject: ', JSON.parse(new_info));    
    } 
}

function collect_data(){
    var form_data = {};
    form_data["field1"] = $("#field1").val();
    form_data["field2"] = $("#field2").val().replace(/\n/g,'<br />');
    
    
    return form_data;
}

function add(data){
    var new_post = "<h1>"+data['field1']+"</h1><br><p>"+data['field2']+"</p>";
    $("#posts").append(new_post);
}
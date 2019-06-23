	let i = 0;
$(document).ready(function(){
$("#buttonAdd").click(function(){
	if ($("#title").val() !== "" && $("#description").val() !=="" ) {
        i++;
	   let tr = document.createElement("tr");
	   let td0 = document.createElement("td");
	   let td1 = document.createElement("td");
	   let td2 = document.createElement("td");
	   let td3 = document.createElement("td");
	   let td4 = document.createElement("button");
	   let td5 = document.createElement("button");
	   $(td4).addClass("edit");
	   $(td5).addClass("delete");

	   let edit = document.createTextNode("Edit");
	   let remove = document.createTextNode("Delete");

        $(td4).append(edit);
        $(td5).append(remove);



        $("#tbody").append(tr); 
        $(tr).append(td0);
        $(tr).append(td1);
        $(tr).append(td2);
        $(tr).append(td3);
        $(tr).append(td4);
        $(tr).append(td5);

        $(td0).append(i);
        $(td1).append($("#title").val());
        $(td2).append($("#description").val());
        $(td3).append($("#file").val());


        
        $("#title").val("");
        $("#description").val("");
    }



})
})
;


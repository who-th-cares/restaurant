function show() {
    var x = document.getElementById("hiddendiv");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  var bbq={
    'version':1.0,
    'year':2022,
    'last_Updated':'20-02-2022',
    'licence' :2022,
  }
  var p=document.getElementById('info');
 
  p.innerHTML=" Version:"+bbq.version+"<br> Year:"+bbq.year+"<br> Last Updated:"+bbq.last_Updated+"<br> Licence:"+bbq.licence;

    var button_=document.getElementById('submit');
    button_.onclick=onclick_event;
    function onclick_event(){
      window.prompt("Enter feedback:");
    }


    let soup=["manchurian","tomato","hot and sour"];
    let list = document.getElementById("soup");
    data.forEach((item) => {
    let li = document.createElement("li");
    li.innerText = item;
    list.appendChild(li);

  });
  
  function c2() {
    window.alert(soup);
  }

  function on() {
    document.getElementById("overlay").style.display = "block";
  }
  
  function off() {
    document.getElementById("overlay").style.display = "none";
  }
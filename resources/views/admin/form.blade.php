<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    /* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

.tabcontent2 {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <ul class="list-group">
        <li class="list-group-item tablinks  btn btn-default " onclick="openLink(event, 'Home')" id="defaultOpen" >Home</li>
        <li class="list-group-item tablinks  btn btn-default " onclick="openLink(event, 'Name')" > Step 1</li> 
        <li class="list-group-item tablinks  btn btn-default" onclick="openLink(event, 'Function')" >Step 2</li>
      </ul>
    </div>
    <div class="col-md-8">
      <!--home-->
      <div id="Home" class="tabcontent">
        <form>
          <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="usr">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
          </div>
          <script type="text/javascript">
          function  addForm() {
              var x = document.forms["myForm"]["fname"].value;
                  if (x == 1) {
               document.write("<div class=\"form-group\">"+
            "<label for=\"pwd\">Password:</label>"+
            "<input type=\"password\" class=\"form-control\" id=\"pwd\">"+
          "</div>");
            }}
        </script>

        </form>
        <h3>Form</h3>
        <form name="myForm" action="file:///D:/EGDownloads/east%20website/east%20website/form.html?" onsubmit="return addForm()" method="post">
          <div class="contianer">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <select class="form-control" id="sel1" name="fname">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <button type="submit" class="btn btn-default">select</button>
                </div>
              </div>
            </div>
          </div>
        </form>  
      </div>
      <!--end of home-->

      <!--name-->
      <div id="Name" class="tabcontent">
        <div class="form-group">
          <label for="usr">Name:</label>
          <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
          <label for="comment">synopsis:</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">submit</button>
        </div>
      </div>
      <!--end of name-->
      
      <!--functions-->
      <div id="Function" class="tabcontent">
        <h1>fill in the leaders of the department</h1>
        <div class="tab">
          <button class="tablinks2" onclick="openCity(event, 'London')" id="defaultPage">3 entries</button>
          <button class="tablinks2" onclick="openCity(event, 'Paris')">Paris</button>
          <button class="tablinks2" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        </div>
        
        <div id="London" class="tabcontent2">
            <div class="form-group">
              <input type="text" name="question3" class="form-control" placeholder="enter the name">
            </div>
            <div class="form-group">
              <input type="text" name="question3" class="form-control" placeholder="enter the contacts e.g phone number">
            </div>
            <div class="form-group">
              <input type="text" name="question3" class="form-control" placeholder="enter the role">
            </div>
        </div>

        <div id="Paris" class="tabcontent2">
          
        </div>

        <div id="Tokyo" class="tabcontent2">
          <h3>Tokyo</h3>
          <p>Tokyo is the capital of Japan.</p>
        </div>
      </div>
      <!-- end of functions-->

      
    </div>
  </div><!--end of row-->
</div><!--end of container--->
</body>

<script type="text/javascript">
  function openLink(evt, linkName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(linkName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
    var x, tabcontent2, tablinks2;
    tabcontent2 = document.getElementsByClassName("tabcontent2");
    for (x = 0; x < tabcontent2.length; x++) {
        tabcontent2[x].style.display = "none";
    }
    tablinks2 = document.getElementsByClassName("tablinks2");
    for (x = 0; x < tablinks2.length; x++) {
        tablinks2[x].className = tablinks2[x].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultPage").click();
</script>
</html>










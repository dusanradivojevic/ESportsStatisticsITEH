function logIn(formID){
  var form = document.getElementById(formID);
  var email = form.elements.item(0).value;
  var pw = form.elements.item(1).value;

  var data = new FormData();
  data.append('email', email);
  data.append('pw', pw);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "php/login.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
    };
  xhr.send(data);
}

function logOut(){
  var xhr = new XMLHttpRequest();
  xhr.open('POST', "php/logout.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
    };
  xhr.send();
}

function registration(){
  var form = document.getElementById(formID);
  var email = form.elements.item(0).value;
  var pw = form.elements.item(1).value;

  var data = new FormData();
  data.append('email', email);
  data.append('pw', pw);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "php/registration.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
    };
  xhr.send(data);
}

function playerInsertAlert(formID){
    var form = document.getElementById(formID);
    var name = form.elements.item(0).value;
    var surname = form.elements.item(1).value;
    var nick = form.elements.item(2).value;
    var year = form.elements.item(3).value;
    var earn = form.elements.item(4).value;
    var game = form.elements.item(5).value;
    var country = form.elements.item(6).value;
    var team = form.elements.item(7).value;

    var data = new FormData();
    data.append('name', name);
    data.append('surname', surname);
    data.append('nick', nick);
    data.append('year', year);
    data.append('earn', earn);
    data.append('game', game);
    data.append('country', country);
    data.append('team', team);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', "crud/playerinsert.php", false);
    xhr.onload = function () {
        var res = JSON.parse(this.response);        
        document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
      };
    xhr.send(data);
}

function playerUpdateAlert(formID){
  var form = document.getElementById(formID);
  var playerID = form.elements.item(0).value;
  var name = form.elements.item(1).value;
  var surname = form.elements.item(2).value;
  var nick = form.elements.item(3).value;
  var year = form.elements.item(4).value;
  var earn = form.elements.item(5).value;
  var game = form.elements.item(6).value;
  var country = form.elements.item(7).value;
  var team = form.elements.item(8).value;

  var data = new FormData();
  data.append('playerID', playerID)
  data.append('name', name);
  data.append('surname', surname);
  data.append('nick', nick);
  data.append('year', year);
  data.append('earn', earn);
  data.append('game', game);
  data.append('country', country);
  data.append('team', team);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/playerUpdate.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
    };
  xhr.send(data);
}

function playerDeleteAlert(formID){
  var form = document.getElementById(formID);
  var playerID = form.elements.item(0).value;

  var data = new FormData();
  data.append('playerID', playerID)

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/playerDelete.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}

function timInsertAlert(formID){
  var form = document.getElementById(formID);
  var name = form.elements.item(0).value;

  var data = new FormData();
  data.append('teamName', name)

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/timInsert.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}

function timUpdateAlert(formID){
  var form = document.getElementById(formID);
  var id = form.elements.item(0).value;
  var name = form.elements.item(1).value;

  var data = new FormData();
  data.append('teamID', id);
  data.append('teamName', name);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/timUpdate.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}

function timDeleteAlert(formID){
  var form = document.getElementById(formID);
  var id = form.elements.item(0).value;

  var data = new FormData();
  data.append('teamID', id);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/timDelete.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}

function zemljaInsertAlert(formID){
  var form = document.getElementById(formID);
  var name = form.elements.item(0).value;
  var short = form.elements.item(1).value;

  var data = new FormData();
  data.append('countryName', name);
  data.append('shortCountryName', short);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/zemljaInsert.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}

function zemljaUpdateAlert(formID){
  var form = document.getElementById(formID);
  var id = form.elements.item(0).value;
  var name = form.elements.item(1).value;
  var short = form.elements.item(2).value;

  var data = new FormData();
  data.append('countryID', id);
  data.append('countryName', name);
  data.append('shortCountryName', short);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/zemljaUpdate.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}

function zemljaDeleteAlert(formID){
  var form = document.getElementById(formID);
  var id = form.elements.item(0).value;

  var data = new FormData();
  data.append('countryID', id);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/zemljaDelete.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}

function igraInsertAlert(formID){
  var form = document.getElementById(formID);
  var name = form.elements.item(0).value;
  var year = form.elements.item(1).value;

  var data = new FormData();
  data.append('gameName', name);
  data.append('releaseYear', year);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/igraInsert.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}

function igraUpdateAlert(formID){
  var form = document.getElementById(formID);
  var id = form.elements.item(0).value;
  var name = form.elements.item(1).value;
  var year = form.elements.item(2).value;

  var data = new FormData();
  data.append('gameID', id);
  data.append('gameName', name);
  data.append('releaseYear', year);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/igraUpdate.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}

function igraDeleteAlert(formID){
  var form = document.getElementById(formID);
  var id = form.elements.item(0).value;

  var data = new FormData();
  data.append('gameID', id);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', "crud/igraDelete.php", false);
  xhr.onload = function () {
      var res = JSON.parse(this.response);        
      document.getElementById("alert").innerHTML = window.alertFunction(res.message);       
  };
  xhr.send(data);
}
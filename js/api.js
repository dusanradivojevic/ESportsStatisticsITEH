// Create a request variable and assign a new XMLHttpRequest object to it.
var request = new XMLHttpRequest()

// Open a new connection, using the GET request on the URL endpoint
request.open('GET', 'http://worldclockapi.com/api/json/est/now', true)

// Send request
request.send()

request.onload = function() {
  // Begin accessing JSON data here
  var data = JSON.parse(this.response)

  document.getElementById("clockID").innerHTML = "Day of week: " + data.dayOfTheWeek;
}

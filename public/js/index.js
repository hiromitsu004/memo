var elem = document.querySelector("input[type='range']");
console.log('test');
var rangeValue = function(){
  var newValue = elem.value;
  var target = document.querySelector('.value');
  target.innerHTML = newValue;
}

// elem.addEventListener("input", rangeValue);

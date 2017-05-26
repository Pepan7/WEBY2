function openModal() {
  document.getElementById('myModal2').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal2').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

/*function plusSlides(n) {
  showSlides(slideIndex += n);
}*/

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
}
var slideIndex = 0;
/*function showSlidesAuto() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlidesAuto, 2000); // Change image every 2 seconds
}

function data0(){
	var myList = document.querySelector('.popis0');
    var myRequest = new Request('photos.json');
    fetch(myRequest)
	.then(function(response) {  return response.json()
	  .then(function(json) {
          var listItem = document.createElement('div');
          listItem.innerHTML = '<strong>' + json.fotky[0].title + '</strong>' +'<br>'+json.fotky[0].description;
          myList.appendChild(listItem);
       
      });
    });	
}

function data1(){
	var myList = document.querySelector('.popis1');
    var myRequest = new Request('photos.json');
    fetch(myRequest)
	.then(function(response) {  return response.json()
	  .then(function(json) {
          var listItem = document.createElement('div');
          listItem.innerHTML = '<strong>' + json.fotky[1].title + '</strong>' +'<br>'+json.fotky[1].description;
          myList.appendChild(listItem);
       
      });
    });	
}

function data2(){
	var myList = document.querySelector('.popis2');
    var myRequest = new Request('photos.json');
    fetch(myRequest)
	.then(function(response) {  return response.json()
	  .then(function(json) {
          var listItem = document.createElement('div');
          listItem.innerHTML = '<strong>' + json.fotky[2].title + '</strong>' +'<br>'+json.fotky[2].description;
          myList.appendChild(listItem);
       
      });
    });	
}

function data3(){
	var myList = document.querySelector('.popis3');
    var myRequest = new Request('photos.json');
    fetch(myRequest)
	.then(function(response) {  return response.json()
	  .then(function(json) {
          var listItem = document.createElement('div');
          listItem.innerHTML = '<strong>' + json.fotky[3].title + '</strong>' +'<br>'+json.fotky[3].description;
          myList.appendChild(listItem);
       
      });
    });	
}

function data4(){
	var myList = document.querySelector('.popis4');
    var myRequest = new Request('photos.json');
    fetch(myRequest)
	.then(function(response) {  return response.json()
	  .then(function(json) {
          var listItem = document.createElement('div');
          listItem.innerHTML = '<strong>' + json.fotky[4].title + '</strong>' +'<br>'+json.fotky[4].description;
          myList.appendChild(listItem);
       
      });
    });	
}*/
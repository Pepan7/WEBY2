function myMap() {
var mapProp= {
    center:new google.maps.LatLng(48.15185320000001,17.073344700000007),
    zoom:17,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
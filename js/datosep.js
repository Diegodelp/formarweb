window.onload=function valor() {


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cvlqs/full?alt=json',
    function (response) {
        
      var first = response.entry.gsx$cupos.$t
	
      document.getElementById('cupo1pe').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cx0b9/full?alt=json',
    function (response1) {
        
      var second = response1.entry.gsx$cupos.$t
	
      document.getElementById('cupo2pe').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d9ney/full?alt=json',
    function (response2) {
        
      var second = response2.entry.gsx$cupos.$t
	
      document.getElementById('cupo3pe').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cvlqs/full?alt=json',
    function (response3) {
        
      var second = response3.entry.gsx$fecha.$t
	
      document.getElementById('fecha1pe').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cx0b9/full?alt=json',
    function (response4) {
        
      var second = response4.entry.gsx$fecha.$t
	
      document.getElementById('fecha2pe').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d9ney/full?alt=json',
    function (response5) {
        
      var second = response5.entry.gsx$fecha.$t
	
      document.getElementById('fecha3pe').value = second;
	  
	 
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cvlqs/full?alt=json',
    function (response6) {
        
      var second = response6.entry.gsx$costos.$t
	
      document.getElementById('costos1pe').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cx0b9/full?alt=json',
    function (response7) {
        
      var second = response7.entry.gsx$costos.$t
	
      document.getElementById('costos2pe').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d9ney/full?alt=json',
    function (response8) {
        
      var second = response8.entry.gsx$costos.$t
	
      document.getElementById('costos3pe').value = second;
	  
})


;};

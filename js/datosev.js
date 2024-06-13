window.onload=function valor() {


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d180g/full?alt=json',
    function (response) {
        
      var first = response.entry.gsx$cupos.$t
	
      document.getElementById('cupo1ve').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d2mkx/full?alt=json',
    function (response1) {
        
      var second = response1.entry.gsx$cupos.$t
	
      document.getElementById('cupo2ve').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cssly/full?alt=json',
    function (response2) {
        
      var second = response2.entry.gsx$cupos.$t
	
      document.getElementById('cupo3ve').value = second;
	  
})


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d180g/full?alt=json',
    function (response3) {
        
      var first = response3.entry.gsx$fecha.$t
	
      document.getElementById('fecha1ve').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d2mkx/full?alt=json',
    function (response4) {
        
      var second = response4.entry.gsx$fecha.$t
	
      document.getElementById('fecha2ve').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cssly/full?alt=json',
    function (response5) {
        
      var second = response5.entry.gsx$fecha.$t
	
      document.getElementById('fecha3ve').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d180g/full?alt=json',
    function (response6) {
        
      var first = response6.entry.gsx$costos.$t
	
      document.getElementById('costos1ve').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d2mkx/full?alt=json',
    function (response7) {
        
      var second = response7.entry.gsx$costos.$t
	
      document.getElementById('costos2ve').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cssly/full?alt=json',
    function (response8) {
        
      var second = response8.entry.gsx$costos.$t
	
      document.getElementById('costos3ve').value = second;
	  
})




;};

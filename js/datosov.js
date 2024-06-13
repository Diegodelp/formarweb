window.onload=function valor() {


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cpzh4/full?alt=json',
    function (response) {
        
      var first = response.entry.gsx$cupos.$t
	
      document.getElementById('cupo1vo').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cre1l/full?alt=json',
    function (response1) {
        
      var second = response1.entry.gsx$cupos.$t
	
      document.getElementById('cupo2vo').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cpzh4/full?alt=json',
    function (response2) {
        
      var second = response2.entry.gsx$fecha.$t
	
      document.getElementById('fecha1vo').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cre1l/full?alt=json',
    function (response3) {
        
      var second = response3.entry.gsx$fecha.$t
	
      document.getElementById('fecha2vo').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cpzh4/full?alt=json',
    function (response4) {
        
      var second = response4.entry.gsx$costos.$t
	
      document.getElementById('costo1vo').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cre1l/full?alt=json',
    function (response5) {
        
      var second = response5.entry.gsx$costos.$t
	
      document.getElementById('costo2vo').value = second;
	  
})




;};

window.onload=function valor() {


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d6ua4/full?alt=json',
    function (response) {
        
      var first = response.entry.gsx$cupos.$t
	
      document.getElementById('cupo1pa').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d88ul/full?alt=json',
    function (response1) {
        
      var second = response1.entry.gsx$cupos.$t
	
      document.getElementById('cupo2pa').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/dkvya/full?alt=json',
    function (response2) {
        
      var second = response2.entry.gsx$cupos.$t
	
      document.getElementById('cupo3pa').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/dmair/full?alt=json',
    function (response3) {
        
      var second = response3.entry.gsx$cupos.$t
	
      document.getElementById('cupo4pa').value = second;
	  
})


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d6ua4/full?alt=json',
    function (response4) {
        
      var first = response4.entry.gsx$fecha.$t
	
      document.getElementById('fecha1pa').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d88ul/full?alt=json',
    function (response5) {
        
      var second = response5.entry.gsx$fecha.$t
	
      document.getElementById('fecha2pa').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/dkvya/full?alt=json',
    function (response6) {
        
      var second = response6.entry.gsx$fecha.$t
	
      document.getElementById('fecha3pa').value = second;
	  
})


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/dmair/full?alt=json',
    function (response7) {
        
      var second = response7.entry.gsx$fecha.$t
	
      document.getElementById('fecha4pa').value = second;
	  
})


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d6ua4/full?alt=json',
    function (response8) {
        
      var first = response8.entry.gsx$costos.$t
	
      document.getElementById('costos1pa').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/d88ul/full?alt=json',
    function (response9) {
        
      var second = response9.entry.gsx$costos.$t
	
      document.getElementById('costos2pa').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/dkvya/full?alt=json',
    function (response10) {
        
      var second = response10.entry.gsx$costos.$t
	
      document.getElementById('costos3pa').value = second;
	  
})


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/dmair/full?alt=json',
    function (response11) {
        
      var second = response11.entry.gsx$costos.$t
	
      document.getElementById('costos4pa').value = second;
	  
})



;};

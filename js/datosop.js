window.onload=function valor() {


$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/ciyn3/full?alt=json',
    function (response) {
        
      var first = response.entry.gsx$cupos.$t
	
      document.getElementById('cupo1po').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/ckd7g/full?alt=json',
    function (response1) {
        
      var second = response1.entry.gsx$cupos.$t
	
      document.getElementById('cupo2po').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/clrrx/full?alt=json',
    function (response2) {
        
      var second = response2.entry.gsx$cupos.$t
	
      document.getElementById('cupo3po').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cyevm/full?alt=json',
    function (response3) {
        
      var second = response3.entry.gsx$cupos.$t
	
      document.getElementById('cupo4po').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/ciyn3/full?alt=json',
    function (response4) {
        
      var first = response4.entry.gsx$fecha.$t
	
      document.getElementById('fecha1po').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/ckd7g/full?alt=json',
    function (response5) {
        
      var second = response5.entry.gsx$fecha.$t
	
      document.getElementById('fecha2po').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/clrrx/full?alt=json',
    function (response6) {
        
      var second = response6.entry.gsx$fecha.$t
	
      document.getElementById('fecha3po').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cyevm/full?alt=json',
    function (response7) {
        
      var second = response7.entry.gsx$fecha.$t
	
      document.getElementById('fecha4po').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/ciyn3/full?alt=json',
    function (response8) {
        
      var first = response8.entry.gsx$costos.$t
	
      document.getElementById('costos1po').value = first;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/ckd7g/full?alt=json',
    function (response9) {
        
      var second = response9.entry.gsx$costos.$t
	
      document.getElementById('costos2po').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/clrrx/full?alt=json',
    function (response10) {
        
      var second = response10.entry.gsx$costos.$t
	
      document.getElementById('costos3po').value = second;
	  
})

$.get( 
    'https://spreadsheets.google.com/feeds/list/1foxTI04G3ZNct_XbZRxRkLwM5ruuupryD2sfKuKVDhY/1/public/full/cyevm/full?alt=json',
    function (response11) {
        
      var second = response11.entry.gsx$costos.$t
	
      document.getElementById('costos4po').value = second;
	  
})


;};

$(document).ready(function(){
	$.post('scrapTwitterName.php', { url: "https://coinmarketcap.com/currencies/neo/" }, function(data) {
    //document.getElementById('somediv').innerHTML = data;        
    console.log(data);
});
});
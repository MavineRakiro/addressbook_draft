$(document).ready(function(){
        //show loader image
        $('#loaderImage').show();

        //show contacts on page load
        showContacts();
});

//show contacts

//Show Contacts
function showContacts(){
	console.log('Showing Contacts...');
	setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})",1000);
}
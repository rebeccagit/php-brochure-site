//old - do not use 
function validateemail()
{
   var emailentry=document.forms.contactform.email.value;
   var re = /\S+@\S+\.\S+/;
   var inspection = re.test(emailentry);
   if(!inspection)
   {
       alert("Please enter correct email in the format of 'yourmail@yourwebsite.com'")
       document.forms.contactform.email.focus();
       return false;
   }
   return(true);
}
   
        
function validatephonenumber()
{
	var re = /(?:\d{3}|\(\d{3}\))([-\/\.])\d{3}\1\d{4}/;  
        var numbers = document.forms.contactform.phone.value; 
        var OK = re.exec(numbers);  
        if (!OK)  
        {
	alert("Oops.  Looks like this isn't a phone number with area code!  Please put the number in this format: 714-999-9999");
         document.forms.contactform.phone.focus();
	return false;
	}  
        return(true); 
}
 

 
function validateentry()
{

      if(document.forms.contactform.email.value == "")
   {
     alert("Please provide an Email address.");
     document.forms.contactform.email.focus();
     return(false);
   }else{
     var validformat=validateemail();
     if(validformat==false)
     {
     return(false);
     }}


   if(document.forms.contactform.name.value=="")
   {
     alert("Please provide your name.");
     document.forms.contactform.name.focus();
     return(false);
   }
   
   if(document.forms.contactform.phone.value=="")
   {
     alert("Please provide a phone number in the format 999-999-9999.");
     document.forms.contactform.phone.focus();
     return(false);
   }
   else if(document.forms.contactform.phone.value.length < 12)
	{
		alert("Please provide the phone number in the format of 999-999-9999.");
		document.forms.contactform.phone.focus();
     		return(false);
	}
        else
        {
		var validnumber=validatephonenumber();
		if(validnumber==false)
		{
		return(false);
		}}
                 
   if(document.forms.contactform.message.value=="")
   {
     alert("Please provide a message.");
     document.forms.contactform.message.focus();
     return(false);
   }
     return(true);
}

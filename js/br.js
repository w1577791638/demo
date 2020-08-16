function isDevice(){//判断是android还是ios还是web
 
var ua = navigator.userAgent.toLowerCase();
 
if(ua.match(/iPhone\sOS/i) == "iphone os" || ua.match(/iPad/i)=="ipad"){//ios
 
return "iOS";
 
}
 
if(ua.match(/Android/i) == "android") {
 
return "Android";
 
}
 
return "Web";
 
};
header("Content-type:application/pdf");
 
header("Content-Disposition:attachment;filename='downloaded.pdf'");
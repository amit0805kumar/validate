function UpdateLength(source,target)
{
curr = document.getElementById(source).value.length;
maxl = document.getElementById(source).maxLength;
document.getElementById(target).innerHTML=curr+'/'+maxl;
}
function PasswordStrength(source,target)
{
    curr = document.getElementById(source).value;
    if(curr.length>4)
     {
    if((curr.indexOf("1")!=-1 || curr.indexOf("2")!=-1 || curr.indexOf("3")!=-1 || curr.indexOf("4")!=-1 || curr.indexOf("5")!=-1 || curr.indexOf("6")!=-1 || curr.indexOf("7")!=-1 || curr.indexOf("8")!=-1 || curr.indexOf("9")!=-1 || curr.indexOf("0"))!=-1 && (curr.indexOf("!")!=-1 || curr.indexOf("@")!=-1 || curr.indexOf("#")!=-1 || curr.indexOf("$")!=-1 || curr.indexOf("%")!=-1 || curr.indexOf("&")!=-1 || curr.indexOf("*")!=-1 || curr.indexOf("^")!=-1))
        {
            document.getElementById(target).innerHTML='STRONG';
            document.getElementById(target).style.color= '#64dd17';
        }
             else
                {
                    document.getElementById(target).innerHTML='MODERATE';
                     document.getElementById(target).style.color= '#b2ff59';
                }
     }
    else
        {
            document.getElementById(target).innerHTML='WEAK';
            document.getElementById(target).style.color= '#d50000';
        }
}
function matchpass(source,target)
{
    curr = document.getElementById(source).value;
    conf = document.getElementById(target).value;
    ret=false;
    if(curr == conf)
        {
            document.getElementById(target).style.background='#ccff90';
            ret=true;
        }
    else{
            document.getElementById(target).style.background='#ff8a80';
    }
    return ret;
}
function EmailVal(source,target)
{
    curr = document.getElementById(source).value;
    atcheck=0;
    dotcheck=0;
    ret=false;
    if(curr.indexOf("@")!=-1)
        {
            if(curr.indexOf("@")==curr.lastIndexOf("@"))
                {
                    atcheck=1;
                }
        }
    if(curr.indexOf(".")!=-1)
        {
            if(curr.lastIndexOf(".")>curr.lastIndexOf("@"))
                {
                    dotcheck=1;
                }
        }
    if(atcheck==1 && dotcheck==1)
        {
            document.getElementById(target).innerHTML="Valid";
            document.getElementById(source).style.background='#ccff90';
             document.getElementById(target).style.color= '#64dd17';
            ret=true;
        }
    else
        {
            document.getElementById(target).innerHTML="Invalid!";
            document.getElementById(source).style.background='#ff8a80';
             document.getElementById(target).style.color= '#d50000';
        }
    return ret;
}
function ValidLength(source)
{
    curr = document.getElementById(source).value;
    ret=false;
    if(curr.length==0)
        {
            document.getElementById(source).style.background='#ff8a80';
            
        }
    else
        {
                document.getElementById(source).style.background='white'; 
            ret=true;
        }
    return ret;
}
function finalcheckup()
{
    t1=ValidLength('password');
    t2=ValidLength('loginid');
    t3=EmailVal('email','emailval');
    t4=matchpass('password','cpassword');
    t5=ValidLength('email');
  if( t1 && t2 && t3 && t4 && t5)
        {
            return true;
        }
    else
        {
            return false;
        }
}
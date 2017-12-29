function UpdateLength(source,target)
{
curr = document.getElementById(source).value.length;
maxl = document.getElementById(source).maxLength;
document.getElementById(target).innerHTML=curr+'/'+maxl;
}
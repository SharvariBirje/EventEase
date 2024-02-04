function validator()
{
    var Username= document.getElementById('nm');
    var Password= document.getElementById('pswrd');

    if(notEmpty(Username,"Username cannot be Empty"))
    {
        if(lengthRestriction(Username,5))
        {
            if(notEmpty(Password,"Password cannot be Empty"))
            {
                if(lengthRestriction(Password,8))
                {
                    return true;
                }
            }
        }
    }
    return false;
}

function notEmpty(elem,helperMsg)
{
    if(elem.value.length==0)
    {
        alert(helperMsg);
        elem.focus();
        return false;
    }
    return true;
}
function lengthRestriction(elem,minLength)
{
    if(elem.value.length< minLength)
    {
        alert("The length of " + elem.name + " cannot be less than " + minLength);
        elem.focus();
        return false;
    }
    return true;
}
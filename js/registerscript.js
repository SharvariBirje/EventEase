function validator()
{
    var Username= document.getElementById('nm');
    var Password= document.getElementById('pswrd');
    var Phone= document.getElementById('phn');
    var Email= document.getElementById('eml');

    if(notEmpty(Username,"Username cannot be Empty"))
    {
        if(lengthRestriction(Username,5))
        {
            if(notEmpty(Password,"Password cannot be Empty"))
            {
                if(lengthRestriction(Password,8))
                {
                    if(isNumeric(Phone,"Please enter a valid phone number"))
                            {
                                if(lengthRestriction2(Phone,10,10))
                                {
                                    if(emailValidator(Email,"Please enter a valid Email Id"))
                                    {
                                        if(genderValidator())
                                        {
                                                return true;
                                        }
                                    }
                                }
                            }
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
function isNumeric(elem,helperMsg)
{
    var regEx = /^[0-9]+$/;
    if(elem.value.match(regEx))
    {
      return true;
    }
    else
    {
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
function lengthRestriction2(elem,minLength,maxLength)
{
    if(elem.value.length < minLength || elem.value.length > maxLength)
    {
        alert("Length of Phone number is incorrect");
        elem.focus();
        return false;
    }
    return true;
}
function emailValidator(elem,helperMsg)
{
    var regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(elem.value.match(regEx))
    {
      return true;
    }
    else
    {
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
function genderValidator()
{
    var Male= document.getElementById('male');
    var Female= document.getElementById('female');
    var Other= document.getElementById('others');
    if(!Male.checked && !Female.checked && !Other.checked)
    {
        alert("Select your Gender");
        return false;
    }
    return true;
}
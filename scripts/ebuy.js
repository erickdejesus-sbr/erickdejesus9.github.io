//feedback3.js

function homeform()
{
	var ProductForm = document.getElementById("productForm");
	validateProduct(ProductForm)
}		

function validateProduct(ProductForm)
{
	var quantity = ProductForm.Quantity.value;
    var firstName = ProductForm.firstName.value;
    var lastName = ProductForm.lastName.value;
	var address = ProductForm.Address.value;
	var state = ProductForm.stateCounty.value;
	var country = ProductForm.Country.value;
	var city = ProductForm.cityTown.value;
	var zip = ProductForm.postalCode.value;
    var phone = ProductForm.phoneNumber.value;
    var email = ProductForm.emailAddress.value;
	var social = ProductForm.socialNumber.value;
    var everythingOK = true;

    if (!validateName(firstName))
    {
        alert("Error: Invalid first name.");
        everythingOK = false;
    }
    
    if (!validateName(lastName))
    {
        alert("Error: Invalid last name.");
        everythingOK = false;
    }
    
	if (!validateAddress(address))
    {
        alert("Error: Address is not filled.");
        everythingOK = false;
    }
	
	if (!validateState(state))
    {
        alert("Error: State/County not filled.");
        everythingOK = false;
    }
	
	if (!validateCountry(country))
    {
        alert("Error: Country not filled.");
        everythingOK = false;
    }
	
	if (!validateCity(city))
    {
        alert("Error: City/Town not filled.");
        everythingOK = false;
    }
	
	if (!validateZip(zip))
    {
        alert("Error: Invalid Zip/Postal Code.");
        everythingOK = false;
    }
	
	if (!validateEmail(email))
    {
        alert("Error: Invalid e-mail address.");
        everythingOK = false;
    }
	
    if (!validatePhone(phone))
    {
        alert("Error: Invalid phone number.");
        everythingOK = false;
    }   
	
	if (!validateSocial(social))
    {
        alert("Error: Invalid social security number.");
        everythingOK = false;
    }  

	if (!validateQuantity(quantity))
    {
        alert("Error: Invalid quantity amount, must be 1-9");
        everythingOK = false;
    }	
    
    if (everythingOK)
    {
        alert("All the information has been submitted correctly\n Thank you for your purchase!");
        return true;
    }
    else
        return false;
}

function validateName(name)
{
    var p = name.search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateAddress(address)
{
    var p = address.search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateState(state)
{
    var p = state.search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateCountry(country)
{
    var p = country.search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateCity(city)
{
    var p = city.search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateZip(zip)
{
    var p = zip.search(/^\d{5}$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateSocial(social)
{
    var p = social.search(/^\d{3}[-\s]{0,1}\d{2}[-\s]{0,1}\d{4}$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateQuantity(quantity)
{
    var p = quantity.search(/^\d$/);
    if (p == 0)
        return true;
    else
        return false;
}


function validateEmail(address)
{
    var p = address.search(/^.+@.+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validatePhone(phone)
{
    var p1 = phone.search(/^\d{3}[-\s]{0,1}\d{3}[-\s]{0,1}\d{4}$/);
    var p2 = phone.search(/^\d{3}[-\s]{0,1}\d{4}$/);
    if (p1 == 0 || p2 == 0)
        return true;
    else
        return false;
}


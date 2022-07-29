const request = new RequestClient();

$(document).ready(function(){
    const shipmentStateList = document.getElementById('shipmentStateList');
    const selectState = document.getElementById('state-list');
    const selectLga = document.getElementById('lga-list');
    const destinationStateList = document.getElementById('destinationStateList');
    const toLgaDropDown = document.getElementById('toLgaDropDown');
    const lgaDropDown = document.getElementById('lga-dropdown');
    const submitButton = document.getElementById('submit');
    const location = document.getElementById('location-link');
    const imageButton = document.getElementById('kexpress-nav-img');
    const clientSubmit = document.getElementById('client-form-submit');
    const formSubmitButton = document.getElementById('form-submit-btn');
    const year = document.getElementById('current-year');
    const currentYear = getCurrentYear();
    year.innerText = currentYear;

    shipmentStateList && shipmentStateList.addEventListener('change', function(e){
        const stateName = shipmentStateList[shipmentStateList.selectedIndex].text;
        scope = '';
        populateStateAndLga(stateName, lgaDropDown, scope);
            
    });   

    destinationStateList && destinationStateList.addEventListener('change', function(e){

        while (toLgaDropDown.firstChild) {
            toLgaDropDown.removeChild(toLgaDropDown.firstChild);
        }
        toLgaDropDown.innerHTML = '<option value="">Select LGA</option>';

        const destinationLgaArray = [];
            const stateName = destinationStateList[destinationStateList.selectedIndex].text;
            const filteredLGA = responseData[0].filter(lga => lga.name == stateName);

            for(let i=0; i< filteredLGA[0].lgas.length; i++) {
                destinationLgaArray.push(filteredLGA[0].lgas[i])
            }
            for (let i = 0; i<destinationLgaArray.length; i++) {
                    if (!destinationLgaArray[i].category) {
                        let opt = document.createElement('option');
                        opt.value = destinationLgaArray[i].id;
                        opt.innerHTML = destinationLgaArray[i].name
                        toLgaDropDown.appendChild(opt);
                    }                    
                }
    });

    $("#form-body").submit(function(e) {
        const textContent = formSubmitButton.textContent;
        const formFields = $(this).serializeArray();
        const formData = {};

        for(let i =0; i<formFields.length; i++) {
            if(formFields[i].value == "" && document.getElementsByName(formFields[i]['name'])[0].required) {
                return false;
            }
            else {
                formData[formFields[i]['name']] = formFields[i]['value'];
            }
        }

        clientSubmit.disabled = true;
        e.preventDefault();
        enableLoading(formSubmitButton);
        return $.ajax({
            url: '/register',
            method: 'GET',
            dataType: 'JSON',
            data: formData
        })
        .then((formResponse) => {
            disableLoading(formSubmitButton, textContent);
            if(formResponse.res.message == 'Unable to create client' || formResponse.res.message == 'Client exists') {
                alert('Unable to create client. Company name or email already exists!');
                $('#company-name, #email').on("focus", function(){
                    clientSubmit.disabled = false;
                });
            }
            else {
                alert('Thank you! Form submitted successfully! Check your mail for more information'); 
                return window.location= '/';
            }
        })
        .catch(error => {
            disableLoading(formSubmitButton, textContent);
            alert('An error occured when submitting form, please try again.', error.toString());
        })
    });

    submitButton && submitButton.addEventListener('click', function(e) {
        e.preventDefault();
        const form = document.forms["form"]
        const weight = form["weight"].value;
        const selectButton = form["from_lga"].value;
        const toSelectButton = form["lga"].value; 
        const  calculateRate  = document.getElementById("calculate-rate");
        const textContent= calculateRate.textContent;
        const shippingAmount = document.getElementById('shippingAmount');
        shippingAmount.style.fontSize = "33px";
        shippingAmount.innerHTML = `₦0.00`;

        if(weight <= 0 || selectButton == "" || toSelectButton == "") {
                return false
        }
        const queryString = $("form").serialize();

        if(weight > 70) {
            window.alert('Please select a weight not greater than 70kg');
            return false;
        }
       
        enableLoading(calculateRate);
        function calculate(query_string) {

            request.get(`/calculate?query_string=${query_string}`)
            .then(response => {
                disableLoading(calculateRate, textContent);
                if(response.message == "No zone mapping found for this LGA") {
                    shippingAmount.innerHTML = `${response.message}`;
                }
                else {
                    const formatter = new Intl.NumberFormat('en-NG', {
                        style: 'currency',
                        currency: 'NGN',
                        minimumFractionDigits: 0,
                        maximumFractionDigits: 0,
                    });
                    shippingAmount.innerHTML = `${formatter.format(response.data)}`;
                }
            })
            .catch(error => {
                disableLoading(calculateRate, textContent);
                shippingAmount.innerHTML = `₦0.00`;
                window.alert(`An error occurred: ${error.responseText}`);
            })
        }

        calculate(queryString);
    }, false);

    $("#track-form").submit(function(e) {
        const orderNumber = document.getElementById("trk-bars").value;
        if (orderNumber == "") {
            return false;
        }

        e.preventDefault();
        return window.location = '/track?order_number=' + orderNumber;    
    })

    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".nav-header").addClass("active");
            $(".kexpress-img").addClass("kexpress-logo");
            $(".sign-up-form ").addClass("bg");
            $(".nav-index").addClass("new-nav-index")
        } else {
           $(".nav-header").removeClass("active");
           $(".kexpress-img").removeClass("kexpress-logo");
           $(".sign-up-form ").removeClass("bg");
           $(".nav-index").removeClass("new-nav-index")
        }
    });

    location && location.addEventListener('click', function(e) {
        window.location = '/location';
    })

    imageButton && imageButton.addEventListener('click', function(e) {
        window.location= '/';
    })

    $('.sidebar-collapse').click(() => {
        $('.sidebar').addClass('active');
        $('.overlay').addClass('active');
        $(".nav-header").addClass("inactive");
    });
    $('#dismiss').click(() => {
        $('.sidebar').removeClass('active');
        $('.overlay').removeClass('active');
        $(".nav-header").removeClass("inactive");
        $(".nav-header").addClass("active");
        $(".kexpress-img").addClass("kexpress-logo");
        $(".sign-up-form ").addClass("bg");
        $(".nav-index").addClass("new-nav-index")
    });

    selectState && selectState.addEventListener('change', function(e){
        const state = selectState[selectState.selectedIndex].text;
        scope = 'form';
        populateStateAndLga(state, selectLga, scope);     
    }); 

});


const getCurrentYear = () => {
    const dateObject = new Date();
    return dateObject.getFullYear();
}

function populateStateAndLga(stateName, listOfLga, scope){
    while (listOfLga.firstChild) {
        listOfLga.removeChild(listOfLga.firstChild);
    }
    listOfLga.innerHTML = '<option value="">Select LGA</option>';

    const lgaArray = [];
    
    const filteredLGA = responseData[0].filter(lga => lga.name == stateName);

    for(let i=0; i< filteredLGA[0].lgas.length; i++) {
        lgaArray.push(filteredLGA[0].lgas[i])
    }

    for (let i = 0; i<lgaArray.length; i++){
        if (!lgaArray[i].category) {
            let opt = document.createElement('option');
            if(scope == 'form')opt.value = lgaArray[i].name;
            else { opt.value = lgaArray[i].id; }
            opt.innerHTML = lgaArray[i].name
            listOfLga.appendChild(opt);
        }
    }
}
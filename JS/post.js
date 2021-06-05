
var all3forms = document.getElementById('all3forms');
all3forms.style.display = "flex";
all3forms.style.justifyContent = "space-around";

var btnjob = document.getElementById('btnjob');
var btnelectronic = document.getElementById('btnelectronic');
var btnrealestate = document.getElementById('btnrealestate');

var jobdiv = document.getElementById('jobdiv');
var elecdiv = document.getElementById('elecdiv');
var realdiv = document.getElementById('realdiv');
var br = document.createElement('br');


//This is for JOB FORM

var form = document.createElement("form");
form.setAttribute('class', "postform");
    form.setAttribute('method',"post");
    form.setAttribute('action',"../PHP/newjob.php");
    form.id = "liveJobForm";
    

    var input_name = document.createElement("input");
    input_name.setAttribute('type',"text");
    input_name.setAttribute('name',"jobname");
    input_name.style.width = '300px';
    input_name.style.height = '45px';
    input_name.style.borderRadius = '15px 50px';
    input_name.style.marginBottom = '10px';
    input_name.placeholder = "Enter Name";

    form.appendChild(input_name);
    form.appendChild(br.cloneNode())
    jobdiv.appendChild(form);
    

    var input_city = document.createElement("input");
    input_city.setAttribute('type',"text");
    input_city.setAttribute('name',"city");
    input_city.style.width = '300px';
    input_city.style.height = '45px';
    input_city.style.borderRadius = '15px 50px';
    input_city.style.marginBottom = '10px';
    input_city.placeholder = "Enter City";

    form.appendChild(input_city);
    form.appendChild(br.cloneNode())
    jobdiv.appendChild(form);

    var input_state = document.createElement("input");
    input_state.setAttribute('type',"text");
    input_state.setAttribute('name',"state");
    input_state.style.width = '300px';
    input_state.style.height = '45px';
    input_state.style.borderRadius = '15px 50px';
    input_state.style.marginBottom = '10px';
    input_state.placeholder = "Enter State";

    form.appendChild(input_state);
    form.appendChild(br.cloneNode());
    jobdiv.appendChild(form);

    var input_country = document.createElement("input");
    input_country.setAttribute('type',"text");
    input_country.setAttribute('name',"country");
    input_country.style.width = '300px';
    input_country.style.height = '45px';
    input_country.style.borderRadius = '15px 50px';
    input_country.style.marginBottom = '10px';
    input_country.placeholder = "Enter Country";

    form.appendChild(input_country);
    form.appendChild(br.cloneNode());
    jobdiv.appendChild(form);

    var input_salary = document.createElement("input");
    input_salary.setAttribute('type',"text");
    input_salary.setAttribute('name',"salary");
    input_salary.style.width = '300px';
    input_salary.style.height = '45px';
    input_salary.style.borderRadius = '15px 50px';
    input_salary.style.marginBottom = '10px';
    input_salary.placeholder = "Enter Expected Salary";

    form.appendChild(input_salary);
    form.appendChild(br.cloneNode());
    jobdiv.appendChild(form);

    var input_skills = document.createElement("input");
    input_skills.setAttribute('type',"text");
    input_skills.setAttribute('name',"descriptionjob");
    input_skills .cols = "20";
    input_skills .rows = "10";
    input_skills.style.width = '300px';
    input_skills.style.height = '45px';
    input_skills.style.borderRadius = '15px 50px';
    input_skills.style.marginBottom = '10px';
input_skills.placeholder = "Enter Somegthing About Job";
input_skills.style.paddingBottom = "47px";
input_skills.style.paddingTop = "45px";

    form.appendChild(input_skills);
    form.appendChild(br.cloneNode());
    jobdiv.appendChild(form);

    var input_experience = document.createElement("input");
    input_experience.setAttribute('type',"text");
    input_experience.setAttribute('name',"experience");
    input_experience.style.width = '300px';
    input_experience.style.height = '45px';
    input_experience.style.borderRadius = '15px 50px';
    input_experience.style.marginBottom = '10px';
    input_experience.placeholder = "Enter Your Experience";

    form.appendChild(input_experience);
    form.appendChild(br.cloneNode());
    jobdiv.appendChild(form);

    var input_starting_date = document.createElement("input");
    input_starting_date.setAttribute('type',"text");
    input_starting_date.setAttribute('name',"startingdate");
    input_starting_date.style.width = '300px';
    input_starting_date.style.height = '45px';
    input_starting_date.style.borderRadius = '15px 50px';
    input_starting_date.style.marginBottom = '10px';
    input_starting_date.placeholder = "Enter Starting Date";

    form.appendChild(input_starting_date);
    form.appendChild(br.cloneNode());
    jobdiv.appendChild(form);

    var input_current_status = document.createElement("input");
    input_current_status.setAttribute('type',"text");
    input_current_status.setAttribute('name',"currentstatus");
    input_current_status.style.width = '300px';
    input_current_status.style.height = '45px';
    input_current_status.style.borderRadius = '15px 50px';
    input_current_status.style.marginBottom = '10px';
    input_current_status.placeholder = "Enter Current Status";

    form.appendChild(input_current_status);
    form.appendChild(br.cloneNode());
    jobdiv.appendChild(form);


var submit = document.createElement("button");
submit.innerHTML = "Submit";
    submit.setAttribute('type',"submit");
    submit.setAttribute('value',"Submit");

    form.appendChild(submit);
    form.appendChild(br.cloneNode());
    

    
    
//This is ELECTRONIC FORM

var formelec = document.createElement("form");
    formelec.setAttribute('class', "postform");
    formelec.setAttribute('method',"post");
    formelec.setAttribute('action',"../PHP/newelectronic.php");
    formelec.id = "liveElectronicForm";
    

    var input_model_name = document.createElement("input");
    input_model_name.setAttribute('type',"text");
    input_model_name.setAttribute('name',"modelname");
    input_model_name.style.width = '300px';
    input_model_name.style.height = '45px';
    input_model_name.style.borderRadius = '15px 50px';
    input_model_name.style.marginBottom = '10px';
    input_model_name.placeholder = "Enter Model Name";

    formelec.appendChild(input_model_name);
    formelec.appendChild(br.cloneNode());
    elecdiv.appendChild(formelec);

    var input_condition = document.createElement("input");
    input_condition.setAttribute('type',"text");
    input_condition.setAttribute('name',"eleccondition");
    input_condition.style.width = '300px';
    input_condition.style.height = '45px';
    input_condition.style.borderRadius = '15px 50px';
    input_condition.style.marginBottom = '10px';
    input_condition.placeholder = "Enter Condition of the device";

    formelec.appendChild(input_condition);
    formelec.appendChild(br.cloneNode());
    elecdiv.appendChild(formelec);

    var input_storage = document.createElement("input");
    input_storage.setAttribute('type',"text");
    input_storage.setAttribute('name',"elecstorage");
    input_storage.style.width = '300px';
    input_storage.style.height = '45px';
    input_storage.style.borderRadius = '15px 50px';
    input_storage.style.marginBottom = '10px';
    input_storage.placeholder = "Enter storage or memory";

    formelec.appendChild(input_storage);
    formelec.appendChild(br.cloneNode());
    elecdiv.appendChild(formelec);

    var input_color = document.createElement("input");
    input_color.setAttribute('type',"text");
    input_color.setAttribute('name',"color");
    input_color.style.width = '300px';
    input_color.style.height = '45px';
    input_color.style.borderRadius = '15px 50px';
    input_color.style.marginBottom = '10px';
    input_color.placeholder = "Enter Color of the device";

    formelec.appendChild(input_color);
    formelec.appendChild(br.cloneNode());
    elecdiv.appendChild(formelec);

    var input_quantity = document.createElement("input");
    input_quantity.setAttribute('type',"text");
    input_quantity.setAttribute('name',"quantity");
    input_quantity.style.width = '300px';
    input_quantity.style.height = '45px';
    input_quantity.style.borderRadius = '15px 50px';
    input_quantity.style.marginBottom = '10px';
    input_quantity.placeholder = "Enter quantity you want";

    formelec.appendChild(input_quantity);
    formelec.appendChild(br.cloneNode());
    elecdiv.appendChild(formelec);

    var input_describe_elec = document.createElement("input");
    input_describe_elec.setAttribute('type',"text");
    input_describe_elec .setAttribute('name','descriptionelec');
    input_describe_elec .maxLength = "5000";
    input_describe_elec .cols = "20";
    input_describe_elec .rows = "10";
    input_describe_elec .style.width = '300px';
    input_describe_elec .style.height = '100px';
    input_describe_elec .style.borderRadius = '15px 50px';
    input_describe_elec .style.marginBottom = '10px';
    input_describe_elec .placeholder = "Enter Somegthing About the device";

    formelec.appendChild(input_describe_elec);
    formelec.appendChild(br.cloneNode());

var submit = document.createElement("button");
submit.innerHTML = "Submit";
    submit.setAttribute('type',"submit");
    submit.setAttribute('value',"Submit");

    formelec.appendChild(submit);
    formelec.appendChild(br.cloneNode());


    //This is for REAL-ESTATE FORM

var form = document.createElement("form");
    form.setAttribute('class', "postform");
    form.setAttribute('method',"post");
    form.setAttribute('action',"../PHP/newrealestate.php");
    form.id = "liveRealEstateForm";


    var input_name_real = document.createElement("input");
    input_name_real.setAttribute('type',"text");
    input_name_real.setAttribute('name',"namereal");
    input_name_real.style.width = '300px';
    input_name_real.style.height = '45px';
    input_name_real.style.borderRadius = '15px 50px';
    input_name_real.style.marginBottom = '10px';
    input_name_real.placeholder = "Enter Name";

    form.appendChild(input_name_real);
    form.appendChild(br.cloneNode())
    realdiv.appendChild(form);

    var input_city_real = document.createElement("input");
    input_city_real.setAttribute('type',"text");
    input_city_real.setAttribute('name',"cityreal");
    input_city_real.style.width = '300px';
    input_city_real.style.height = '45px';
    input_city_real.style.borderRadius = '15px 50px';
    input_city_real.style.marginBottom = '10px';
    input_city_real.placeholder = "Enter City";

    form.appendChild(input_city_real);
    form.appendChild(br.cloneNode())
    realdiv.appendChild(form);

    var input_state_real = document.createElement("input");
    input_state_real.setAttribute('type',"text");
    input_state_real.setAttribute('name',"statereal");
    input_state_real.style.width = '300px';
    input_state_real.style.height = '45px';
    input_state_real.style.borderRadius = '15px 50px';
    input_state_real.style.marginBottom = '10px';
    input_state_real.placeholder = "Enter state";

    form.appendChild(input_state_real);
    form.appendChild(br.cloneNode())
    realdiv.appendChild(form);

    var input_country_real = document.createElement("input");
    input_country_real.setAttribute('type',"text");
    input_country_real.setAttribute('name',"countryreal");
    input_country_real.style.width = '300px';
    input_country_real.style.height = '45px';
    input_country_real.style.borderRadius = '15px 50px';
    input_country_real.style.marginBottom = '10px';
    input_country_real.placeholder = "Enter country";

    form.appendChild(input_country_real);
    form.appendChild(br.cloneNode())
    realdiv.appendChild(form);

    var input_postalcode = document.createElement("input");
    input_postalcode.setAttribute('type',"text");
    input_postalcode.setAttribute('name',"postalcode");
    input_postalcode.style.width = '300px';
    input_postalcode.style.height = '45px';
    input_postalcode.style.borderRadius = '15px 50px';
    input_postalcode.style.marginBottom = '10px';
    input_postalcode.placeholder = "Enter Postal Code";

    form.appendChild(input_postalcode);
    form.appendChild(br.cloneNode())
    realdiv.appendChild(form);

    var input_describe_real = document.createElement("input");
    input_describe_real.setAttribute('type',"text");
    input_describe_real .setAttribute('name','descriptionreal');
    input_describe_real .maxLength = "5000";
    input_describe_real .cols = "20";
    input_describe_real .rows = "10";
    input_describe_real .style.width = '300px';
    input_describe_real .style.height = '100px';
    input_describe_real .style.borderRadius = '15px 50px';
    input_describe_real .style.marginBottom = '10px';
    input_describe_real .placeholder = "Enter Somegthing About the Real-Estate";

    form.appendChild(input_describe_real);
    form.appendChild(br.cloneNode())
    realdiv.appendChild(form);

    var input_expected_rent = document.createElement("input");
    input_expected_rent.setAttribute('type',"text");
    input_expected_rent.setAttribute('name',"expectedRent");
    input_expected_rent.style.width = '300px';
    input_expected_rent.style.height = '45px';
    input_expected_rent.style.borderRadius = '15px 50px';
    input_expected_rent.style.marginBottom = '10px';
    input_expected_rent.placeholder = "Enter Expected Rent";

    form.appendChild(input_expected_rent);
    form.appendChild(br.cloneNode())
    realdiv.appendChild(form);

    var input_expected_lease = document.createElement("input");
    input_expected_lease.setAttribute('type',"text");
    input_expected_lease.setAttribute('name',"expectedLease");
    input_expected_lease.style.width = '300px';
    input_expected_lease.style.height = '45px';
    input_expected_lease.style.borderRadius = '15px 50px';
    input_expected_lease.style.marginBottom = '10px';
    input_expected_lease.placeholder = "Enter Expected Lease";

    form.appendChild(input_expected_lease);
    form.appendChild(br.cloneNode())
    realdiv.appendChild(form);

    var submit = document.createElement("button");
submit.setAttribute('type', "submit");
submit.innerHTML = "Submit";
    submit.setAttribute('value',"Submit");

    form.appendChild(submit);
    form.appendChild(br.cloneNode());

    function show(param_div_id){
        all3forms.innerHTML = document.getElementById(param_div_id).innerHTML;

        if (event.srcElement.id == "btnjob") {
            btnjob.disabled = true;
            btnrealestate.disabled = false;
            btnelectronic.disabled = false;
            }
            else if (event.srcElement.id == "btnelectronic") {
                btnjob.disabled = false;
                btnrealestate.disabled = false;
                btnelectronic.disabled = true;
            }
            else {
                btnjob.disabled = false;
                btnrealestate.disabled = true;
                btnelectronic.disabled = false;
            }

        
    }
    

    






